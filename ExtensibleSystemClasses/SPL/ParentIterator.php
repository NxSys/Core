<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ParentIterator wrapper support file
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
use ParentIterator as PHP_ParentIterator;

/**
 * ParentIterator wrapper
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
 * @see \ParentIterator
 * @link http://php.net/manual/en/class.parentiterator.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class ParentIterator extends StdLib\SPL\RecursiveFilterIterator implements \RecursiveIterator, \OuterIterator, \Traversable, \Iterator, StdLib\SPL\IParentIterator, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct(\RecursiveIterator $iterator)
	{
		$this->_refreshTarget(new PHP_ParentIterator(...func_get_args()));
	}


	public function accept()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
