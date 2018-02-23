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

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use XMLReader as PHP_XMLReader;

/**
 * XMLReader wrapper
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
 * @see \XMLReader
 * @link http://php.net/manual/en/class.xmlreader.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class XMLReader implements StdLib\xmlreader\IXMLReader, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	function __construct()
	{
		$this->_refreshTarget(new PHP_XMLReader(...func_get_args()));
	}


	public function close()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getAttribute($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getAttributeNo($index)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getAttributeNs($name, $namespaceURI)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getParserProperty($property)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isValid()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function lookupNamespace($prefix)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function moveToAttributeNo($index)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function moveToAttribute($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function moveToAttributeNs($name, $namespaceURI)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function moveToElement()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function moveToFirstAttribute()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function moveToNextAttribute()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function open($URI, $encoding, $options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function read()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function next($localname)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function readInnerXml()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function readOuterXml()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function readString()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setSchema($filename)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setParserProperty($property, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setRelaxNGSchema($filename)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setRelaxNGSchemaSource($source)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function XML($source, $encoding, $options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function expand($basenode)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
