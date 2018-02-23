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

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use PharData as PHP_PharData;

/**
 * PharData wrapper
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
 * @see \PharData
 * @link http://php.net/manual/en/class.phardata.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class PharData extends StdLib\Phar\RecursiveDirectoryIterator implements \RecursiveIterator, \SeekableIterator, \Traversable, \Iterator, \Countable, \ArrayAccess, StdLib\Phar\IPharData, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct($filename, $flags, $alias, $fileformat)
	{
		$this->_refreshTarget(new PHP_PharData(...func_get_args()));
	}


	public function __destruct()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function addEmptyDir($dirname)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function addFile($filename, $localname)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function addFromString($localname, $contents)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function buildFromDirectory($base_dir, $regex)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function buildFromIterator($iterator, $base_directory)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function compressFiles($compression_type)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function decompressFiles()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function compress($compression_type, $file_ext)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function decompress($file_ext)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function convertToExecutable($format, $compression_type, $file_ext)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function convertToData($format, $compression_type, $file_ext)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function copy($newfile, $oldfile)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function count()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function delete($entry)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function delMetadata()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function extractTo($pathto, $files, $overwrite)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getAlias()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPath()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getMetadata()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getModified()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getSignature()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getStub()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getVersion()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasMetadata()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isBuffering()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isCompressed()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isFileFormat($fileformat)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isWritable()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetExists($entry)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetGet($entry)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetSet($entry, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function offsetUnset($entry)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setAlias($alias)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setDefaultStub($index, $webindex)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setMetadata($metadata)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setSignatureAlgorithm($algorithm, $privatekey)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setStub($newstub, $maxlen)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function startBuffering()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function stopBuffering()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
