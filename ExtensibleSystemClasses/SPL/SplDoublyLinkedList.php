<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std SplDoublyLinkedList wrapper support file
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
use SplDoublyLinkedList as PHP_SplDoublyLinkedList;

/**
 * SplDoublyLinkedList wrapper
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
 * @see \SplDoublyLinkedList
 * @link http://php.net/manual/en/class.spldoublylinkedlist.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class SplDoublyLinkedList implements \Iterator, \Traversable, \Countable, \ArrayAccess, \Serializable, StdLib\SPL\ISplDoublyLinkedList, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	function __construct()
	{
		$this->_refreshTarget(new PHP_SplDoublyLinkedList(...func_get_args()));
	}


	public function pop()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function shift()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function push($value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function unshift($value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function top()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function bottom()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isEmpty()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setIteratorMode($flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getIteratorMode()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function count()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetExists($index)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetGet($index)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetSet($index, $newval)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetUnset($index)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function add($index, $newval)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function rewind()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function current()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function key()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function next()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function prev()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function valid()
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
}
