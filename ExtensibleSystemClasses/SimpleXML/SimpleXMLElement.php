<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std SimpleXMLElement wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\SimpleXML;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use SimpleXMLElement as PHP_SimpleXMLElement;

/**
 * SimpleXMLElement wrapper
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
 * @see \SimpleXMLElement
 * @link http://php.net/manual/en/class.simplexmlelement.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class SimpleXMLElement implements \Traversable, StdLib\SimpleXML\ISimpleXMLElement, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	final public function __construct($data, $options, $data_is_url, $ns, $is_prefix)
	{
		$this->_refreshTarget(new PHP_SimpleXMLElement(...func_get_args()));
	}


	public function asXML($filename)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function saveXML($filename)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function xpath($path)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function registerXPathNamespace($prefix, $ns)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function attributes($ns, $is_prefix)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function children($ns, $is_prefix)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function getNamespaces($recursve)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function getDocNamespaces($recursve, $from_root)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function addChild($name, $value, $ns)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function addAttribute($name, $value, $ns)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function count()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\SimpleXML\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}
}
