<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std SplPriorityQueue wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use SplPriorityQueue as PHP_SplPriorityQueue;

/**
 * SplPriorityQueue wrapper
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
 * @see \SplPriorityQueue
 * @link http://php.net/manual/en/class.splpriorityqueue.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class SplPriorityQueue implements \Iterator, \Traversable, \Countable, StdLib\ISplPriorityQueue, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	public function compare($a, $b)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function insert($value, $priority)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function setExtractFlags($flags)
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function getExtractFlags()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function top()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function extract()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function isEmpty()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function rewind()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function current()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function key()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function next()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function valid()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function recoverFromCorruption()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}


	public function isCorrupted()
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
		$pfqcn='NxSys\Core\ExtensibleSystemClasses\\'.get_class($ret);
		if(class_exists($pfqcn) && isset(class_implements($pfqcn)['%decorator.ns\DecoratingTrait.type'] )
		{
		    return $pfqcn::_setTarget($ret);
		}

		return $ret;
	}
}