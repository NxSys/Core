<?php 

namespace NxSys\Core\ExtensibleSystemClasses;
use ReflectionClass, ReflectionMethod;
use Nette\PhpGenerator as Gen;

//use Nette\Utils\ObjectHelpers\SmartObject;

class Compiler
{
	//use \Nette\Utils\ObjectHelpers\SmartObject;
	public $conf=[];
	public $sCurrClassname;

	public $sCurrExtName;

	public function __construct($sClassName)
	{
		$this->conf=\Nette\Neon\Neon::decode(file_get_contents(SCRIPT_CONFIG));

		$this->sCurrClassname=$sClassName;
	}

	public function exec(): array
	{
		$this->sCurrExtName=(new ReflectionClass($this->sCurrClassname))->getExtensionName();
		$this->sCurrExtName=('Core'==$this->sCurrExtName)?false:$this->sCurrExtName;

		//create class
		$oTypedClass=new Gen\PhpFile;
		$oTypedClass->addComment($this->getTxt('txt.file.doc'));
		$oClassNS=$oTypedClass->addNamespace($this->getTxt('namespace'));
		// $oClassNS->addUse($this->getTxt('decorator.ns'), 'StdLib');
		$oClassNS->addUse($this->sCurrClassname, 'PHP_'.$this->sCurrClassname);

		//create interface
		$oTypedIface=new Gen\PhpFile;
		$oTypedIface->addComment($this->getTxt('txt.file.doc'));
		$oTypeNS=$oTypedIface->addNamespace($this->getTxt('namespace'));

		$oClassBase=$oClassNS->addClass($this->sCurrClassname);
		$oItypeBase=$oTypeNS->addInterface('I'.$this->sCurrClassname);
		$oClassBase->addComment($this->getTxt('txt.class.doc'));
		$oItypeBase->addComment($this->getTxt('txt.itype.doc'));

		//$oClassBase->addTrait($this->getTxt('decorator'));
		$this->buildClassPair($oClassBase, $oItypeBase);
		$oClassBase->addImplement($this->getTxt('namespace').'\I'.$this->sCurrClassname);
		//$oClassBase->addImplement($this->getTxt('decorator.type'));

        $sClassFile = $this->getTxt('class-path-pattern');
        $sIntefaceFile = $this->getTxt('iface-path-pattern');
		$this->write($oTypedClass, $this->getTxt('php.concretions.uopz.extend'), $sClassFile);
		$this->write($oTypedIface, "", $sIntefaceFile);
		return [$sClassFile, $sIntefaceFile];
	}

	public function write(Gen\PhpFile $file, string $addendum, string $sFileName)
	{
        // echo $file;
        if(!file_exists(dirname($sFileName)))
        {
            mkdir(dirname($sFileName));
        }
		file_put_contents($sFileName, (string) $file . "\n" . $addendum);
	}

	public function buildClassPair(Gen\ClassType $class, Gen\ClassType $interface)
	{
		$aClassData=$this->reflectOnClass($class->getName());
		//$interface->setConstants($aClassData['constants']);

		//parental assistance is suggested
		if ($aClassData['parent'] != null)
		{
			$sParent=$aClassData['parent']->getName();
			if (!in_array($sParent, (array)$this->conf['blacklist.classes']))
			{
				$interface->addExtend($this->getTxt('namespace').'\I'.$sParent);
				//$class->addExtend($this->getTxt('namespace').'\\'.$sParent);
			}
			else
			{
				$class->addExtend('\\' . $sParent);
			}
		}

		//@todo this is more verbose (syntax & interface count) then it needs to be
		//array_walk($aClassData['interfaces'], function($ifs) use ($class) { $class->addImplement($ifs); });


		//add more meths C&I
		//$aClassMethods=array_map(function($rm) use ($class) { return Gen\Method::from([$class->getName(), $rm->getName()])->setBody(null); }, $aClassData['methods.ref']);
		//$interface->setMethods(array_map(function($o) { return clone $o; }, $aClassMethods));
		//array_walk($aClassMethods, function($meth) { $meth->setBody($this->getTxt('php.concretions.body')); });
		//fixup ctor
		// var_dump($aClassData['hasCtor'])
		//$aClassData['hasCtor']?:array_unshift($aClassMethods, new Gen\Method('__construct'));
		//$class->setMethods($aClassMethods);
		//$class->getMethod('__construct')
			  //->addComment('ctor')
			  //->setBody($this->getTxt('php.ctor.body'));

		//@todo fixup edgecases?
		return;
	}

	public function reflectOnClass(string $baseClassname): array
	{
		$rc=new ReflectionClass($baseClassname);
		// var_dump($rc->getDocComment())
		$aData=[];

		//get ext -> ns
		// $this->sCurrExtName=$rc->getExtensionName()
		// $this->sCurrExtName=('Core'==$this->sCurrExtName)?'':$this->sCurrExtName

		//get implementation declarations
		$aData['interfaces']=array_map(function($ifs){ return $ifs->getName(); }, $rc->getInterfaces());

		//get all class constants
		$aData['constants']=$rc->getConstants();

		$aData['parent'] = $rc->getParentClass();

		// var_dump($rc->getStaticProperties())
		($rc->getStaticProperties())?null:(sprintf('( %d )', count($rc->getStaticProperties())));

		//get ctor
		$aData['hasCtor']=false;
		if(($ctor=$rc->getConstructor())
			&& $ctor->getDeclaringClass()->getName()==$baseClassname)
		{
			$aData['hasCtor']=$rc->getConstructor()->getName();
		}

		//get all local public method prototypes
		$meths=$rc->getMethods(ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED);
		$meths_statics=$rc->getMethods(ReflectionMethod::IS_STATIC);
		$meths=array_filter($meths, function($v, $k) use ($baseClassname) { return ($v->getDeclaringClass()->getName()==$baseClassname) && !$v->isStatic(); },
							ARRAY_FILTER_USE_BOTH);
		$aData['methods.ref']=$meths;
		// $aData['methods']=array_map(function($meth){ return $meth->getName(); }, $meths)
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
		$aTokens['%php.ns'  ]='\\'.($this->sCurrExtName?$this->sCurrExtName:'PHP');
		$aTokens['%php.ndir']=DIRECTORY_SEPARATOR.($this->sCurrExtName?$this->sCurrExtName:'PHP');
// var_dump($this->sCurrExtName,$aTokens)
		//setup % prefix
		$cnftok=array_combine(array_map(function($k){return '%'.$k;}, array_keys($this->conf)), $this->conf);

		// yeah yeah I know
		// Arr2Str is a non issue so.. meh? meh.
		return @strtr(str_replace(array_keys($cnftok), $this->conf, $this->conf[$sBlockName]), $aTokens);
	}
}