<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std SplFileInfo wrapper support file
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

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use SplFileInfo as PHP_SplFileInfo;

/**
 * SplFileInfo wrapper
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
 * @see \SplFileInfo
 * @link http://php.net/manual/en/class.splfileinfo.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class SplFileInfo implements StdLib\SPL\ISplFileInfo, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct($file_name)
	{
		$this->_refreshTarget(new PHP_SplFileInfo(...func_get_args()));
	}


	public function getPath()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getFilename()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getExtension()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getBasename($suffix)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPathname()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPerms()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getInode()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getSize()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getOwner()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getGroup()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getATime()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getMTime()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getCTime()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getType()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isWritable()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isReadable()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isExecutable()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isFile()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isDir()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isLink()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getLinkTarget()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getRealPath()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getFileInfo($class_name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPathInfo($class_name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function openFile($open_mode, $use_include_path, $context)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setFileClass($class_name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setInfoClass($class_name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	final public function _bad_state_ex()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function __toString()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
