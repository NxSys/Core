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

/**
 * Interface for XMLWriter
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
 * @see \XMLWriter
 * @link http://php.net/manual/en/class.xmlwriter.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IXMLWriter
{
	public function openUri($uri);


	public function openMemory();


	public function setIndent($indent);


	public function setIndentString($indentString);


	public function startComment();


	public function endComment();


	public function startAttribute($name);


	public function endAttribute();


	public function writeAttribute($name, $value);


	public function startAttributeNs($prefix, $name, $uri);


	public function writeAttributeNs($prefix, $name, $uri, $content);


	public function startElement($name);


	public function endElement();


	public function fullEndElement();


	public function startElementNs($prefix, $name, $uri);


	public function writeElement($name, $content);


	public function writeElementNs($prefix, $name, $uri, $content);


	public function startPi($target);


	public function endPi();


	public function writePi($target, $content);


	public function startCdata();


	public function endCdata();


	public function writeCdata($content);


	public function text($content);


	public function writeRaw($content);


	public function startDocument($version, $encoding, $standalone);


	public function endDocument();


	public function writeComment($content);


	public function startDtd($qualifiedName, $publicId, $systemId);


	public function endDtd();


	public function writeDtd($name, $publicId, $systemId, $subset);


	public function startDtdElement($qualifiedName);


	public function endDtdElement();


	public function writeDtdElement($name, $content);


	public function startDtdAttlist($name);


	public function endDtdAttlist();


	public function writeDtdAttlist($name, $content);


	public function startDtdEntity($name, $isparam);


	public function endDtdEntity();


	public function writeDtdEntity($name, $content);


	public function outputMemory($flush);


	public function flush($empty);
}
