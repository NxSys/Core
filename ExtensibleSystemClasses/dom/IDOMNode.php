<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std DOMNode wrapper support file
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
 * Interface for DOMNode
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
 * @see \DOMNode
 * @link http://php.net/manual/en/class.domnode.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IDOMNode
{
	public function insertBefore(\DOMNode $newChild, ?\DOMNode $refChild);


	public function replaceChild(\DOMNode $newChild, \DOMNode $oldChild);


	public function removeChild(\DOMNode $oldChild);


	public function appendChild(\DOMNode $newChild);


	public function hasChildNodes();


	public function cloneNode($deep);


	public function normalize();


	public function isSupported($feature, $version);


	public function hasAttributes();


	public function compareDocumentPosition(\DOMNode $other);


	public function isSameNode(\DOMNode $other);


	public function lookupPrefix($namespaceURI);


	public function isDefaultNamespace($namespaceURI);


	public function lookupNamespaceUri($prefix);


	public function isEqualNode(\DOMNode $arg);


	public function getFeature($feature, $version);


	public function setUserData($key, $data, $handler);


	public function getUserData($key);


	public function getNodePath();


	public function getLineNo();


	public function C14N($exclusive, $with_comments, ?array $xpath, ?array $ns_prefixes);


	public function C14NFile($uri, $exclusive, $with_comments, ?array $xpath, ?array $ns_prefixes);
}
