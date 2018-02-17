<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std LimitIterator wrapper support file
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

use LimitIterator as PHP_LimitIterator;
use NxSys\Core\ExtensibleSystemClasses as StdLib;

/**
 * LimitIterator wrapper
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
 * @see \LimitIterator
 * @link http://php.net/manual/en/class.limititerator.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class LimitIterator extends StdLib\SPL\IteratorIterator implements \OuterIterator, \Traversable, \Iterator, StdLib\SPL\ILimitIterator, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct(\Iterator $iterator, $offset, $count)
	{
		$this->_refreshTarget(new PHP_LimitIterator(...func_get_args()));
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


	public function seek($position)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPosition()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getInnerIterator()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
