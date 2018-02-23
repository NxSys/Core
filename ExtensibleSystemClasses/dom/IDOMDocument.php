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

/**
 * Interface for DOMDocument
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
 * @see \DOMDocument
 * @link http://php.net/manual/en/class.domdocument.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IDOMDocument extends IDOMNode
{
	public function createElement($tagName, $value);


	public function createDocumentFragment();


	public function createTextNode($data);


	public function createComment($data);


	public function createCDATASection($data);


	public function createProcessingInstruction($target, $data);


	public function createAttribute($name);


	public function createEntityReference($name);


	public function getElementsByTagName($tagName);


	public function importNode(\DOMNode $importedNode, $deep);


	public function createElementNS($namespaceURI, $qualifiedName, $value);


	public function createAttributeNS($namespaceURI, $qualifiedName);


	public function getElementsByTagNameNS($namespaceURI, $localName);


	public function getElementById($elementId);


	public function adoptNode(\DOMNode $source);


	public function normalizeDocument();


	public function renameNode(\DOMNode $node, $namespaceURI, $qualifiedName);


	public function load($source, $options);


	public function save($file);


	public function loadXML($source, $options);


	public function saveXML(?\DOMNode $node, $options);


	public function __construct($version, $encoding);


	public function validate();


	public function xinclude($options);


	public function loadHTML($source, $options);


	public function loadHTMLFile($source, $options);


	public function saveHTML();


	public function saveHTMLFile($file);


	public function schemaValidate($filename);


	public function schemaValidateSource($source);


	public function relaxNGValidate($filename);


	public function relaxNGValidateSource($source);


	public function registerNodeClass($baseClass, $extendedClass);
}
