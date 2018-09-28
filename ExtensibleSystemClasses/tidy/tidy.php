<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std tidy wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\tidy;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use tidy as PHP_tidy;

/**
 * tidy wrapper
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
 * @see \tidy
 * @link http://php.net/manual/en/class.tidy.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class tidy implements StdLib\tidy\Itidy, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	public function getOpt()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function cleanRepair()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function parseFile()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function parseString()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function repairString()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function repairFile()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function diagnose()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getRelease()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getConfig()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getStatus()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getHtmlVer()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isXhtml()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isXml()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function root()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function head()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function html()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function body()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	/**
	 * ctor
	 */
	public function __construct()
	{
		$this->_refreshTarget(new PHP_tidy(...func_get_args()));
	}
}
