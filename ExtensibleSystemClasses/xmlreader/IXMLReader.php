<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std XMLReader wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\xmlreader;

/**
 * Interface for XMLReader
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
 * @see \XMLReader
 * @link http://php.net/manual/en/class.xmlreader.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IXMLReader
{
	const NONE = 0;
	const ELEMENT = 1;
	const ATTRIBUTE = 2;
	const TEXT = 3;
	const CDATA = 4;
	const ENTITY_REF = 5;
	const ENTITY = 6;
	const PI = 7;
	const COMMENT = 8;
	const DOC = 9;
	const DOC_TYPE = 10;
	const DOC_FRAGMENT = 11;
	const NOTATION = 12;
	const WHITESPACE = 13;
	const SIGNIFICANT_WHITESPACE = 14;
	const END_ELEMENT = 15;
	const END_ENTITY = 16;
	const XML_DECLARATION = 17;
	const LOADDTD = 1;
	const DEFAULTATTRS = 2;
	const VALIDATE = 3;
	const SUBST_ENTITIES = 4;

	public function close();


	public function getAttribute($name);


	public function getAttributeNo($index);


	public function getAttributeNs($name, $namespaceURI);


	public function getParserProperty($property);


	public function isValid();


	public function lookupNamespace($prefix);


	public function moveToAttributeNo($index);


	public function moveToAttribute($name);


	public function moveToAttributeNs($name, $namespaceURI);


	public function moveToElement();


	public function moveToFirstAttribute();


	public function moveToNextAttribute();


	public function open($URI, $encoding, $options);


	public function read();


	public function next($localname);


	public function readInnerXml();


	public function readOuterXml();


	public function readString();


	public function setSchema($filename);


	public function setParserProperty($property, $value);


	public function setRelaxNGSchema($filename);


	public function setRelaxNGSchemaSource($source);


	public function XML($source, $encoding, $options);


	public function expand($basenode);
}
