<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std RecursiveTreeIterator wrapper support file
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
use RecursiveTreeIterator as PHP_RecursiveTreeIterator;

/**
 * RecursiveTreeIterator wrapper
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
 * @see \RecursiveTreeIterator
 * @link http://php.net/manual/en/class.recursivetreeiterator.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class RecursiveTreeIterator extends StdLib\SPL\RecursiveIteratorIterator implements \OuterIterator, \Traversable, \Iterator, StdLib\SPL\IRecursiveTreeIterator, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct(\Traversable $iterator, $flags, $caching_it_flags, $mode)
	{
		$this->_refreshTarget(new PHP_RecursiveTreeIterator(...func_get_args()));
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


	public function beginIteration()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endIteration()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function callHasChildren()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function callGetChildren()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function beginChildren()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endChildren()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function nextElement()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPrefix()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setPrefixPart($part, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getEntry()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setPostfix()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPostfix()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
