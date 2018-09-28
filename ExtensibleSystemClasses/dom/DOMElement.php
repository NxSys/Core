<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std DOMElement wrapper support file
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

use DOMElement as PHP_DOMElement;
use NxSys\Core\ExtensibleSystemClasses as StdLib;

/**
 * DOMElement wrapper
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
 * @see \DOMElement
 * @link http://php.net/manual/en/class.domelement.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class DOMElement extends StdLib\dom\DOMNode implements StdLib\dom\IDOMElement, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	public function getAttribute($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setAttribute($name, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function removeAttribute($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getAttributeNode($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setAttributeNode(\DOMAttr $newAttr)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function removeAttributeNode(\DOMAttr $oldAttr)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getElementsByTagName($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getAttributeNS($namespaceURI, $localName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setAttributeNS($namespaceURI, $qualifiedName, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function removeAttributeNS($namespaceURI, $localName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getAttributeNodeNS($namespaceURI, $localName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setAttributeNodeNS(\DOMAttr $newAttr)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getElementsByTagNameNS($namespaceURI, $localName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasAttribute($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasAttributeNS($namespaceURI, $localName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setIdAttribute($name, $isId)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setIdAttributeNS($namespaceURI, $localName, $isId)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setIdAttributeNode(\DOMAttr $attr, $isId)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	/**
	 * ctor
	 */
	public function __construct($name, $value, $uri)
	{
		$this->_refreshTarget(new PHP_DOMElement(...func_get_args()));
	}
}
