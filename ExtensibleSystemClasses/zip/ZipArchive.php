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

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use ZipArchive as PHP_ZipArchive;

/**
 * ZipArchive wrapper
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
 * @see \ZipArchive
 * @link http://php.net/manual/en/class.ziparchive.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class ZipArchive implements \Countable, StdLib\zip\IZipArchive, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	function __construct()
	{
		$this->_refreshTarget(new PHP_ZipArchive(...func_get_args()));
	}


	public function open($filename, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setPassword($password)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function close()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function count()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getStatusString()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function addEmptyDir($dirname)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function addFromString($name, $content)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function addFile($filepath, $entryname, $start, $length)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function addGlob($pattern, $flags, $options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function addPattern($pattern, $path, $options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function renameIndex($index, $new_name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function renameName($name, $new_name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setArchiveComment($comment)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getArchiveComment($flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setCommentIndex($index, $comment)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setCommentName($name, $comment)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getCommentIndex($index, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getCommentName($name, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function deleteIndex($index)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function deleteName($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function statName($filename, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function statIndex($index, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function locateName($filename, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getNameIndex($index, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function unchangeArchive()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function unchangeAll()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function unchangeIndex($index)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function unchangeName($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function extractTo($pathto, $files)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getFromName($entryname, $len, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getFromIndex($index, $len, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getStream($entryname)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setExternalAttributesName($name, $opsys, $attr, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setExternalAttributesIndex($index, $opsys, $attr, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getExternalAttributesName($name, &$opsys, &$attr, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getExternalAttributesIndex($index, &$opsys, &$attr, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setCompressionName($name, $method, $compflags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setCompressionIndex($index, $method, $compflags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setEncryptionName($name, $method, $password)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setEncryptionIndex($index, $method, $password)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
