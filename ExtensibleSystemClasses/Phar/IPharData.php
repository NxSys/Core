<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std PharData wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\Phar;

/**
 * Interface for PharData
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
 * @see \PharData
 * @link http://php.net/manual/en/class.phardata.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IPharData extends IRecursiveDirectoryIterator
{
	const CURRENT_MODE_MASK = 240;
	const CURRENT_AS_PATHNAME = 32;
	const CURRENT_AS_FILEINFO = 0;
	const CURRENT_AS_SELF = 16;
	const KEY_MODE_MASK = 3840;
	const KEY_AS_PATHNAME = 0;
	const FOLLOW_SYMLINKS = 512;
	const KEY_AS_FILENAME = 256;
	const NEW_CURRENT_AND_KEY = 256;
	const OTHER_MODE_MASK = 12288;
	const SKIP_DOTS = 4096;
	const UNIX_PATHS = 8192;

	public function __construct($filename, $flags, $alias, $fileformat);


	public function __destruct();


	public function addEmptyDir($dirname);


	public function addFile($filename, $localname);


	public function addFromString($localname, $contents);


	public function buildFromDirectory($base_dir, $regex);


	public function buildFromIterator($iterator, $base_directory);


	public function compressFiles($compression_type);


	public function decompressFiles();


	public function compress($compression_type, $file_ext);


	public function decompress($file_ext);


	public function convertToExecutable($format, $compression_type, $file_ext);


	public function convertToData($format, $compression_type, $file_ext);


	public function copy($newfile, $oldfile);


	public function count();


	public function delete($entry);


	public function delMetadata();


	public function extractTo($pathto, $files, $overwrite);


	public function getAlias();


	public function getPath();


	public function getMetadata();


	public function getModified();


	public function getSignature();


	public function getStub();


	public function getVersion();


	public function hasMetadata();


	public function isBuffering();


	public function isCompressed();


	public function isFileFormat($fileformat);


	public function isWritable();


	public function offsetExists($entry);


	public function offsetGet($entry);


	public function offsetSet($entry, $value);


	public function offsetUnset($entry);


	public function setAlias($alias);


	public function setDefaultStub($index, $webindex);


	public function setMetadata($metadata);


	public function setSignatureAlgorithm($algorithm, $privatekey);


	public function setStub($newstub, $maxlen);


	public function startBuffering();


	public function stopBuffering();
}
