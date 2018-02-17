<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std RegexIterator wrapper support file
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
use RegexIterator as PHP_RegexIterator;

/**
 * RegexIterator wrapper
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
 * @see \RegexIterator
 * @link http://php.net/manual/en/class.regexiterator.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class RegexIterator extends StdLib\SPL\FilterIterator implements \Iterator, \Traversable, \OuterIterator, StdLib\SPL\IRegexIterator, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct(\Iterator $iterator, $regex, $mode, $flags, $preg_flags)
	{
		$this->_refreshTarget(new PHP_RegexIterator(...func_get_args()));
	}


	public function accept()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getMode()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setMode($mode)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getFlags()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setFlags($flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPregFlags()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setPregFlags($preg_flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getRegex()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
