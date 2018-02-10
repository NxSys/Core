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

/**
 * Interface for DOMElement
 *
 * This interface is an extraction of the prototype (contract) from the
 * respective class and exposes it as standard interface. It allows you to
 * 1) typehint on this interface and not miscellaneous concretions and
 * 2) augment and replace code with standard OOP hierarchies. Essentially we're
 * making these classes a little more SOLID.
 *
 * Note: Whith the presence of this interface (and related concretions) you can
 * now easily experiment with partial extensions of the decorated base class.
 * You are encouraged to do so, but do so with care as not all of the internal's
 * operation is well documented...
 *
 * @see \DOMElement
 * @link http://php.net/manual/en/class.domelement.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IDOMElement extends IDOMNode
{
	public function getAttribute($name);


	public function setAttribute($name, $value);


	public function removeAttribute($name);


	public function getAttributeNode($name);


	public function setAttributeNode(\DOMAttr $newAttr);


	public function removeAttributeNode(\DOMAttr $oldAttr);


	public function getElementsByTagName($name);


	public function getAttributeNS($namespaceURI, $localName);


	public function setAttributeNS($namespaceURI, $qualifiedName, $value);


	public function removeAttributeNS($namespaceURI, $localName);


	public function getAttributeNodeNS($namespaceURI, $localName);


	public function setAttributeNodeNS(\DOMAttr $newAttr);


	public function getElementsByTagNameNS($namespaceURI, $localName);


	public function hasAttribute($name);


	public function hasAttributeNS($namespaceURI, $localName);


	public function setIdAttribute($name, $isId);


	public function setIdAttributeNS($namespaceURI, $localName, $isId);


	public function setIdAttributeNode(\DOMAttr $attr, $isId);


	public function __construct($name, $value, $uri);
}
