<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ReflectionExtension wrapper support file
 *
 * @link http://nxsys.org/spaces/onx/wiki/Nexus_Common_Library
 * @link https://onx.zulipchat.com
 *
 * @package NxSys.Core\ESC
 * @license http://nxsys.org/spaces/onx/wiki/license
 * Please see the license.txt file or the url above for full copyright and license information.
 * @copyright Copyright 2018 Nexus Systems, inc.
 *
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 * @author $LastChangedBy$
 *
 * @version $Revision$
 */

namespace NxSys\Core\ExtensibleSystemClasses\Reflection;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use ReflectionExtension as PHP_ReflectionExtension;

/**
 * ReflectionExtension wrapper
 *
 * This class is technically a wrapper (or facade) for the internal PHP class.
 * It also serves as a concretion of the respective interface so that its type
 * may be used without having to create a reference class yourself.
 *
 * This class will implement a trait that allows direct proxying of calls to an
 * underlying target object. Regardless of that magic, methods are "implemented"
 * (but stubbed) so as to formally fulfill the contract required by the interface.
 *
 * Occasionally if an internal method returns one of these wrapped objects it
 * will be *rewrapped* before being returned.
 *
 * @see \ReflectionExtension
 * @link http://php.net/manual/en/class.reflectionextension.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class ReflectionExtension implements \Reflector, StdLib\Reflection\IReflectionExtension, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	public static function export($name, $return)
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	/**
	 * ctor
	 */
	public function __construct($name)
	{
		$this->_refreshTarget(new PHP_ReflectionExtension(...func_get_args()));
	}


	public function __toString()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function getName()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function getVersion()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function getFunctions()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function getConstants()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function getINIEntries()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function getClasses()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function getClassNames()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function getDependencies()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function info()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function isPersistent()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function isTemporary()
	{
		$ret=$this->__call(__FUNCTION__, func_get_args());
		if($ret===$this->_oTargetObject)
		{
		    return $this;
		}
		if(!is_object($ret))
		{
			return $ret;
		}
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\Reflection\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}
}
