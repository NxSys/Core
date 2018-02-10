<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ZipArchive wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\zip;

/**
 * Interface for ZipArchive
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
 * @see \ZipArchive
 * @link http://php.net/manual/en/class.ziparchive.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IZipArchive
{
	const CREATE = 1;
	const EXCL = 2;
	const CHECKCONS = 4;
	const OVERWRITE = 8;
	const FL_NOCASE = 1;
	const FL_NODIR = 2;
	const FL_COMPRESSED = 4;
	const FL_UNCHANGED = 8;
	const FL_ENC_GUESS = 0;
	const FL_ENC_RAW = 64;
	const FL_ENC_STRICT = 128;
	const FL_ENC_UTF_8 = 2048;
	const FL_ENC_CP437 = 4096;
	const CM_DEFAULT = -1;
	const CM_STORE = 0;
	const CM_SHRINK = 1;
	const CM_REDUCE_1 = 2;
	const CM_REDUCE_2 = 3;
	const CM_REDUCE_3 = 4;
	const CM_REDUCE_4 = 5;
	const CM_IMPLODE = 6;
	const CM_DEFLATE = 8;
	const CM_DEFLATE64 = 9;
	const CM_PKWARE_IMPLODE = 10;
	const CM_BZIP2 = 12;
	const CM_LZMA = 14;
	const CM_TERSE = 18;
	const CM_LZ77 = 19;
	const CM_WAVPACK = 97;
	const CM_PPMD = 98;
	const ER_OK = 0;
	const ER_MULTIDISK = 1;
	const ER_RENAME = 2;
	const ER_CLOSE = 3;
	const ER_SEEK = 4;
	const ER_READ = 5;
	const ER_WRITE = 6;
	const ER_CRC = 7;
	const ER_ZIPCLOSED = 8;
	const ER_NOENT = 9;
	const ER_EXISTS = 10;
	const ER_OPEN = 11;
	const ER_TMPOPEN = 12;
	const ER_ZLIB = 13;
	const ER_MEMORY = 14;
	const ER_CHANGED = 15;
	const ER_COMPNOTSUPP = 16;
	const ER_EOF = 17;
	const ER_INVAL = 18;
	const ER_NOZIP = 19;
	const ER_INTERNAL = 20;
	const ER_INCONS = 21;
	const ER_REMOVE = 22;
	const ER_DELETED = 23;
	const OPSYS_DOS = 0;
	const OPSYS_AMIGA = 1;
	const OPSYS_OPENVMS = 2;
	const OPSYS_UNIX = 3;
	const OPSYS_VM_CMS = 4;
	const OPSYS_ATARI_ST = 5;
	const OPSYS_OS_2 = 6;
	const OPSYS_MACINTOSH = 7;
	const OPSYS_Z_SYSTEM = 8;
	const OPSYS_Z_CPM = 9;
	const OPSYS_WINDOWS_NTFS = 10;
	const OPSYS_MVS = 11;
	const OPSYS_VSE = 12;
	const OPSYS_ACORN_RISC = 13;
	const OPSYS_VFAT = 14;
	const OPSYS_ALTERNATE_MVS = 15;
	const OPSYS_BEOS = 16;
	const OPSYS_TANDEM = 17;
	const OPSYS_OS_400 = 18;
	const OPSYS_OS_X = 19;
	const OPSYS_DEFAULT = 3;
	const EM_NONE = 0;
	const EM_AES_128 = 257;
	const EM_AES_192 = 258;
	const EM_AES_256 = 259;

	public function open($filename, $flags);


	public function setPassword($password);


	public function close();


	public function count();


	public function getStatusString();


	public function addEmptyDir($dirname);


	public function addFromString($name, $content);


	public function addFile($filepath, $entryname, $start, $length);


	public function addGlob($pattern, $flags, $options);


	public function addPattern($pattern, $path, $options);


	public function renameIndex($index, $new_name);


	public function renameName($name, $new_name);


	public function setArchiveComment($comment);


	public function getArchiveComment($flags);


	public function setCommentIndex($index, $comment);


	public function setCommentName($name, $comment);


	public function getCommentIndex($index, $flags);


	public function getCommentName($name, $flags);


	public function deleteIndex($index);


	public function deleteName($name);


	public function statName($filename, $flags);


	public function statIndex($index, $flags);


	public function locateName($filename, $flags);


	public function getNameIndex($index, $flags);


	public function unchangeArchive();


	public function unchangeAll();


	public function unchangeIndex($index);


	public function unchangeName($name);


	public function extractTo($pathto, $files);


	public function getFromName($entryname, $len, $flags);


	public function getFromIndex($index, $len, $flags);


	public function getStream($entryname);


	public function setExternalAttributesName($name, $opsys, $attr, $flags);


	public function setExternalAttributesIndex($index, $opsys, $attr, $flags);


	public function getExternalAttributesName($name, &$opsys, &$attr, $flags);


	public function getExternalAttributesIndex($index, &$opsys, &$attr, $flags);


	public function setCompressionName($name, $method, $compflags);


	public function setCompressionIndex($index, $method, $compflags);


	public function setEncryptionName($name, $method, $password);


	public function setEncryptionIndex($index, $method, $password);
}