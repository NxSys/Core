<?php
require_once 'vendor\autoload.php';

use Nette\Neon;
use Nette\PhpGenerator as Gen;

$oldcd=getcwd();
chdir(__DIR__);
const SCRIPT_CONFIG='esc-generator.neon';
($conf=Neon\Neon::decode(file_get_contents(SCRIPT_CONFIG))) or die('Problem with config file');

//-----C L A S S E S-----

class SplXPiller
{
	use Nette\SmartObject;
	public $conf=[];
	public $sCurrClassname;

	public $sCurrExtName;

	public function __construct($sClassName)
	{
		$this->conf=Neon\Neon::decode(file_get_contents(SCRIPT_CONFIG));

		$this->sCurrClassname=$sClassName;
	}

	public function exec()
	{
		$this->sCurrExtName=(new ReflectionClass($this->sCurrClassname))->getExtensionName();
		$this->sCurrExtName=('Core'==$this->sCurrExtName)?false:$this->sCurrExtName;

		//create class
		$oTypedClass=new Gen\PhpFile;
		$oTypedClass->addComment($this->getTxt('txt.file.doc'));
		$oClassNS=$oTypedClass->addNamespace($this->getTxt('namespace'));
		$oClassNS->addUse($this->getTxt('decorator.ns'), 'StdLib');
		$oClassNS->addUse($this->sCurrClassname, 'PHP_'.$this->sCurrClassname);

		//create interface
		$oTypedIface=new Gen\PhpFile;
		$oTypedIface->addComment($this->getTxt('txt.file.doc'));
		$oTypeNS=$oTypedIface->addNamespace($this->getTxt('namespace'));

		$oClassBase=$oClassNS->addClass($this->sCurrClassname);
		$oItypeBase=$oTypeNS->addInterface('I'.$this->sCurrClassname);
		$oClassBase->addComment($this->getTxt('txt.class.doc'));
		$oItypeBase->addComment($this->getTxt('txt.itype.doc'));

		$oClassBase->addTrait($this->getTxt('decorator'));
		$this->buildClassPair($oClassBase, $oItypeBase);
		$oClassBase->addImplement($this->getTxt('namespace').'\I'.$this->sCurrClassname);
		$oClassBase->addImplement($this->getTxt('decorator.type'));


		$this->write($oTypedClass, $this->getTxt('class-path-pattern'));
		$this->write($oTypedIface, $this->getTxt('iface-path-pattern'));
		return;
	}

	public function write(Nette\PhpGenerator\PhpFile $file, string $sFileName)
	{
		// echo $file;
		@mkdir(dirname($sFileName));
		file_put_contents($sFileName, $file);
	}

	public function buildClassPair(Gen\ClassType $class, Gen\ClassType $interface)
	{
		$aClassData=$this->reflectOnClass($class->getName());
		$interface->setConstants($aClassData['constants']);

		//parental assistance is suggested
		if ($aClassData['parent'] != null)
		{
			$sParent=$aClassData['parent']->getName();
			$interface->addExtend($this->getTxt('namespace').'\I'.$sParent);
			$class->addExtend($this->getTxt('namespace').'\\'.$sParent);
		}

		//@todo this is more verbose (syntax & interface count) then it needs to be
		array_walk($aClassData['interfaces'], function($ifs) use ($class) { $class->addImplement($ifs); });


		//add more meths C&I
		$aClassMethods=array_map(function($rm) use ($class) { return Gen\Method::from([$class->getName(), $rm->getName()])->setBody(null); }, $aClassData['methods.ref']);
		$interface->setMethods(array_map(function($o) { return clone $o; }, $aClassMethods));
		array_walk($aClassMethods, function($meth) { $meth->setBody($this->getTxt('php.concretions.body.selfret')); });
		//fixup ctor
		// var_dump($aClassData['hasCtor']);
		$aClassData['hasCtor']?:array_unshift($aClassMethods, new Gen\Method('__construct'));
		$class->setMethods($aClassMethods);
		$class->getMethod('__construct')
			  ->addComment('ctor')
			  ->setBody($this->getTxt('php.ctor.body'));

		//@todo fixup edgecases?
		return;
	}

	public function reflectOnClass(string $baseClassname): array
	{
		$rc=new ReflectionClass($baseClassname);
		// var_dump($rc->getDocComment());
		$aData=[];

		//get ext -> ns
		// $this->sCurrExtName=$rc->getExtensionName();
		// $this->sCurrExtName=('Core'==$this->sCurrExtName)?'':$this->sCurrExtName;

		//get implementation declarations
		$aData['interfaces']=array_map(function($ifs){ return $ifs->getName(); }, $rc->getInterfaces());

		//get all class constants
		$aData['constants']=$rc->getConstants();

		$aData['parent'] = $rc->getParentClass();

		//get ctor
		$aData['hasCtor']=false;
		if(($ctor=$rc->getConstructor())
			&& $ctor->getDeclaringClass()->getName()==$baseClassname)
		{
			$aData['hasCtor']=$rc->getConstructor()->getName();
		}

		//get all local public method prototypes
		$meths=$rc->getMethods(ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED);
		$meths=array_filter($meths, function($v, $k) use ($baseClassname) { return $v->getDeclaringClass()->getName()==$baseClassname; },
							ARRAY_FILTER_USE_BOTH);
		$aData['methods.ref']=$meths;
		// $aData['methods']=array_map(function($meth){ return $meth->getName(); }, $meths);
		//get

		return $aData;
	}

	public function reflectOnParams($oReflectCtor)
	{
		$params=$oReflectCtor->getParameters();
	}

	public function getTxt($sBlockName): string
	{

		//@todo precompile for speed
		$aTokens=[];
		$aTokens['%classname']=$this->sCurrClassname;
		$aTokens['%classname.lower']=strtolower($this->sCurrClassname);
		$aTokens['%php.ns' ]=$this->sCurrExtName?'\\'.$this->sCurrExtName:null;
		$aTokens['%php.ndir']=$this->sCurrExtName?(DIRECTORY_SEPARATOR.$this->sCurrExtName):null;
// var_dump($this->sCurrExtName,$aTokens);
		//setup % prefix
		$cnftok=array_combine(array_map(function($k){return '%'.$k;}, array_keys($this->conf)), $this->conf);

		// yeah yeah I know
		// Arr2Str is a non issue so.. meh? meh.
		return @strtr(str_replace(array_keys($cnftok), $this->conf, $this->conf[$sBlockName]), $aTokens);
	}
}
//-----F U N C T I O N S-----

function getInternalClasses()
{
	($conf=Neon\Neon::decode(file_get_contents(SCRIPT_CONFIG))) or die('Problem with config file');
	$a=[];
	$aAllTheClasses=get_declared_classes();
	if($conf['whitelist.classes'])
	{
		array_unshift($aAllTheClasses, ...$conf['whitelist.classes']);
	}
	if($conf['whitelist.exts'])
	{
		array_walk($conf['whitelist.exts'], function($ext) use($aAllTheClasses) { array_unshift($aAllTheClasses, (new ReflectionExtension($ext))->getClassNames());} );
	}
	foreach($aAllTheClasses as $cls)
	{
		$rc=new \ReflectionClass($cls);
		if($rc->isUserDefined()
		|| $rc->isFinal()
		|| ($rc->getConstructor()?$rc->getConstructor()->isPrivate():false)
		|| in_array($cls, (array)$conf['blacklist.classes'])
		|| in_array($rc->getExtensionName(), (array)$conf['blacklist.exts'])
		)
		{
			continue;
		}
		$a[]=$cls;
	}
	return $a;
}
// $aTargetClassnames=spl_classes();

$aTargetClassnames=getInternalClasses();
// foreach ($conf['classes'] as $cls)
foreach ($aTargetClassnames as $cls)
{
	echo "$cls";
	(new SplXPiller($cls))->exec();
	echo "...\n";
}
echo "\ndone";
chdir($oldcd);