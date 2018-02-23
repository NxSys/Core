<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std mysqli_result wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\mysqli;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use mysqli_result as PHP_mysqli_result;

/**
 * mysqli_result wrapper
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
 * @see \mysqli_result
 * @link http://php.net/manual/en/class.mysqli_result.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class mysqli_result implements \Traversable, StdLib\mysqli\Imysqli_result, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct()
	{
		$this->_refreshTarget(new PHP_mysqli_result(...func_get_args()));
	}


	public function close()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function free()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function data_seek($offset)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetch_field()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetch_fields()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetch_field_direct($field_nr)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetch_all($result_type)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetch_array($result_type)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetch_assoc()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetch_object($class_name, array $params)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetch_row()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function field_seek($field_nr)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function free_result()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
