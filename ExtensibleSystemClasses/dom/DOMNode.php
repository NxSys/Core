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

use DOMNode as PHP_DOMNode;
use NxSys\Core\ExtensibleSystemClasses as StdLib;

/**
 * DOMNode wrapper
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
 * @see \DOMNode
 * @link http://php.net/manual/en/class.domnode.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class DOMNode implements StdLib\dom\IDOMNode, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	function __construct()
	{
		$this->_refreshTarget(new PHP_DOMNode(...func_get_args()));
	}


	public function insertBefore(PHP_DOMNode $newChild, ?PHP_DOMNode $refChild)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function replaceChild(PHP_DOMNode $newChild, PHP_DOMNode $oldChild)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function removeChild(PHP_DOMNode $oldChild)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function appendChild(PHP_DOMNode $newChild)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasChildNodes()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function cloneNode($deep)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function normalize()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isSupported($feature, $version)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasAttributes()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function compareDocumentPosition(PHP_DOMNode $other)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isSameNode(PHP_DOMNode $other)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function lookupPrefix($namespaceURI)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isDefaultNamespace($namespaceURI)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function lookupNamespaceUri($prefix)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isEqualNode(PHP_DOMNode $arg)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getFeature($feature, $version)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setUserData($key, $data, $handler)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getUserData($key)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getNodePath()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getLineNo()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function C14N($exclusive, $with_comments, ?array $xpath, ?array $ns_prefixes)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function C14NFile($uri, $exclusive, $with_comments, ?array $xpath, ?array $ns_prefixes)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
