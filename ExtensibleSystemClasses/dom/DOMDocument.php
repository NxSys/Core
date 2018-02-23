<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std DOMDocument wrapper support file
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

use DOMDocument as PHP_DOMDocument;
use NxSys\Core\ExtensibleSystemClasses as StdLib;

/**
 * DOMDocument wrapper
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
 * @see \DOMDocument
 * @link http://php.net/manual/en/class.domdocument.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class DOMDocument extends StdLib\dom\DOMNode implements StdLib\dom\IDOMDocument, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	public function createElement($tagName, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createDocumentFragment()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createTextNode($data)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createComment($data)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createCDATASection($data)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createProcessingInstruction($target, $data)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createAttribute($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createEntityReference($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getElementsByTagName($tagName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function importNode(\DOMNode $importedNode, $deep)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createElementNS($namespaceURI, $qualifiedName, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createAttributeNS($namespaceURI, $qualifiedName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getElementsByTagNameNS($namespaceURI, $localName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getElementById($elementId)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function adoptNode(\DOMNode $source)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function normalizeDocument()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function renameNode(\DOMNode $node, $namespaceURI, $qualifiedName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function load($source, $options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function save($file)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function loadXML($source, $options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function saveXML(?\DOMNode $node, $options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	/**
	 * ctor
	 */
	public function __construct($version, $encoding)
	{
		$this->_refreshTarget(new PHP_DOMDocument(...func_get_args()));
	}


	public function validate()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function xinclude($options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function loadHTML($source, $options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function loadHTMLFile($source, $options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function saveHTML()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function saveHTMLFile($file)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function schemaValidate($filename)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function schemaValidateSource($source)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function relaxNGValidate($filename)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function relaxNGValidateSource($source)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function registerNodeClass($baseClass, $extendedClass)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
