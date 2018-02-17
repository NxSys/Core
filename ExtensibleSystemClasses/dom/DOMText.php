<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std DOMText wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\dom;

use DOMText as PHP_DOMText;
use NxSys\Core\ExtensibleSystemClasses as StdLib;

/**
 * DOMText wrapper
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
 * @see \DOMText
 * @link http://php.net/manual/en/class.domtext.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class DOMText extends StdLib\dom\DOMCharacterData implements StdLib\dom\IDOMText, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	public function splitText($offset)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isWhitespaceInElementContent()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isElementContentWhitespace()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function replaceWholeText($content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	/**
	 * ctor
	 */
	public function __construct($value)
	{
		$this->_refreshTarget(new PHP_DOMText(...func_get_args()));
	}
}
