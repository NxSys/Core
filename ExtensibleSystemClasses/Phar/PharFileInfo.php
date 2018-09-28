<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std PharFileInfo wrapper support file
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
use PharFileInfo as PHP_PharFileInfo;

/**
 * PharFileInfo wrapper
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
 * @see \PharFileInfo
 * @link http://php.net/manual/en/class.pharfileinfo.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class PharFileInfo extends StdLib\Phar\SplFileInfo implements StdLib\Phar\IPharFileInfo, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct($filename)
	{
		$this->_refreshTarget(new PHP_PharFileInfo(...func_get_args()));
	}


	public function __destruct()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function chmod($perms)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function compress($compression_type)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function decompress()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function delMetadata()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getCompressedSize()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getCRC32()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getContent()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getMetadata()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPharFlags()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasMetadata()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isCompressed($compression_type)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isCRCChecked()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setMetadata($metadata)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
