<?php
//require_once 'vendor\nette\neon\src\neon.php';

defined('SCRIPT_CONFIG')	|| define('SCRIPT_CONFIG', 'bin\esc-generator.neon');
defined('MSG_ESC_NOCONF')	|| define('MSG_ESC_NOCONF', 'ESC: The detected configuration file for ESC is corrupt or unreadable. '.__DIR__.DIRECTORY_SEPARATOR.SCRIPT_CONFIG);

// const?

function __ESC_JIT_AUTOLOADER(string $sClass)
{
	static $conf;
	if(!$conf)
	{
		($conf=\Nette\Neon\Neon::decode(file_get_contents(SCRIPT_CONFIG)) or trigger_error(MSG_ESC_NOCONF, E_USER_NOTICE));	
	}


	$sBaseClassname=basename($sClass);
	
	if (!class_exists($sBaseClassname))
	{
		if (substr($sBaseClassname, 0,  1) !== "I")
		{
			//this 'ought to be be a valid system class
			return false;
		}
		else
		{
			$sBaseClassname = substr($sBaseClassname, 1);
		}
        
    }
	
	
	$rc=new \ReflectionClass($sBaseClassname);
	if($rc->isUserDefined()
		|| $rc->isFinal()
		|| ($rc->getConstructor()?$rc->getConstructor()->isPrivate():false)
		|| in_array($sBaseClassname, (array)$conf['blacklist.classes'])
		|| in_array($rc->getExtensionName(), (array)$conf['blacklist.exts'])
		)
	{
        return false;
	}
	else
	{
        //Call compiler
		$aCIPair=(new \NxSys\Core\ExtensibleSystemClasses\Compiler($sBaseClassname))->exec();
		foreach ($aCIPair as $sFile)
		{
			require_once $sFile;
		}
		return true;
	}
}

spl_autoload_register('__ESC_JIT_AUTOLOADER');