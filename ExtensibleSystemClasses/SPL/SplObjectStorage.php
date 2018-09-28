<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std SplObjectStorage wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\SPL;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use SplObjectStorage as PHP_SplObjectStorage;

/**
 * SplObjectStorage wrapper
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
 * @see \SplObjectStorage
 * @link http://php.net/manual/en/class.splobjectstorage.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class SplObjectStorage implements \Countable, \Iterator, \Traversable, \Serializable, \ArrayAccess, StdLib\SPL\ISplObjectStorage, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	function __construct()
	{
		$this->_refreshTarget(new PHP_SplObjectStorage(...func_get_args()));
	}


	public function attach($object, $inf)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function detach($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function contains($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function addAll($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function removeAll($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function removeAllExcept($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getInfo()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setInfo($info)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getHash($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function count()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function rewind()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function valid()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function key()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function current()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function next()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function unserialize($serialized)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function serialize()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetExists($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetSet($object, $inf)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetUnset($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetGet($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
