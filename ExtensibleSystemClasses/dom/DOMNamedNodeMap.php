<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std DOMNamedNodeMap wrapper support file
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

use DOMNamedNodeMap as PHP_DOMNamedNodeMap;
use NxSys\Core\ExtensibleSystemClasses as StdLib;

/**
 * DOMNamedNodeMap wrapper
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
 * @see \DOMNamedNodeMap
 * @link http://php.net/manual/en/class.domnamednodemap.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class DOMNamedNodeMap implements \Traversable, \Countable, StdLib\dom\IDOMNamedNodeMap, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	function __construct()
	{
		$this->_refreshTarget(new PHP_DOMNamedNodeMap(...func_get_args()));
	}


	public function getNamedItem($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setNamedItem(\DOMNode $arg)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function removeNamedItem($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function item($index)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getNamedItemNS($namespaceURI, $localName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setNamedItemNS(\DOMNode $arg)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function removeNamedItemNS($namespaceURI, $localName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function count()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
