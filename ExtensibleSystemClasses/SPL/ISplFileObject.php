<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std SplFileObject wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\SPL;

/**
 * Interface for SplFileObject
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
 * @see \SplFileObject
 * @link http://php.net/manual/en/class.splfileobject.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface ISplFileObject extends ISplFileInfo
{
	const DROP_NEW_LINE = 1;
	const READ_AHEAD = 2;
	const SKIP_EMPTY = 4;
	const READ_CSV = 8;

	public function __construct($file_name, $open_mode, $use_include_path, $context);


	public function rewind();


	public function eof();


	public function valid();


	public function fgets();


	public function fgetcsv($delimiter, $enclosure, $escape);


	public function fputcsv($fields, $delimiter, $enclosure, $escape);


	public function setCsvControl($delimiter, $enclosure, $escape);


	public function getCsvControl();


	public function flock($operation, &$wouldblock);


	public function fflush();


	public function ftell();


	public function fseek($pos, $whence);


	public function fgetc();


	public function fpassthru();


	public function fgetss($allowable_tags);


	public function fscanf($format, &...$vars);


	public function fwrite($str, $length);


	public function fread($length);


	public function fstat();


	public function ftruncate($size);


	public function current();


	public function key();


	public function next();


	public function setFlags($flags);


	public function getFlags();


	public function setMaxLineLen($max_len);


	public function getMaxLineLen();


	public function hasChildren();


	public function getChildren();


	public function seek($line_pos);


	public function getCurrentLine();


	public function __toString();
}
