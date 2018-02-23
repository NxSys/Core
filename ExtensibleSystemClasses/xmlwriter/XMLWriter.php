<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std XMLWriter wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\xmlwriter;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use XMLWriter as PHP_XMLWriter;

/**
 * XMLWriter wrapper
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
 * @see \XMLWriter
 * @link http://php.net/manual/en/class.xmlwriter.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class XMLWriter implements StdLib\xmlwriter\IXMLWriter, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	function __construct()
	{
		$this->_refreshTarget(new PHP_XMLWriter(...func_get_args()));
	}


	public function openUri($uri)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function openMemory()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setIndent($indent)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setIndentString($indentString)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startComment()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endComment()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startAttribute($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endAttribute()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writeAttribute($name, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startAttributeNs($prefix, $name, $uri)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writeAttributeNs($prefix, $name, $uri, $content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startElement($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endElement()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fullEndElement()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startElementNs($prefix, $name, $uri)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writeElement($name, $content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writeElementNs($prefix, $name, $uri, $content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startPi($target)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endPi()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writePi($target, $content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startCdata()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endCdata()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writeCdata($content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function text($content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writeRaw($content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startDocument($version, $encoding, $standalone)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endDocument()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writeComment($content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startDtd($qualifiedName, $publicId, $systemId)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endDtd()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writeDtd($name, $publicId, $systemId, $subset)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startDtdElement($qualifiedName)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endDtdElement()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writeDtdElement($name, $content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startDtdAttlist($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endDtdAttlist()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writeDtdAttlist($name, $content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startDtdEntity($name, $isparam)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function endDtdEntity()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function writeDtdEntity($name, $content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function outputMemory($flush)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function flush($empty)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
