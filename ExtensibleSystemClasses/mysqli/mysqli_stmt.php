<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std mysqli_stmt wrapper support file
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
use mysqli_stmt as PHP_mysqli_stmt;

/**
 * mysqli_stmt wrapper
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
 * @see \mysqli_stmt
 * @link http://php.net/manual/en/class.mysqli_stmt.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class mysqli_stmt implements StdLib\mysqli\Imysqli_stmt, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct()
	{
		$this->_refreshTarget(new PHP_mysqli_stmt(...func_get_args()));
	}


	public function attr_get($attribute)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function attr_set($attribute, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function bind_param($types, &...$vars)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function bind_result(&...$vars)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function close()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function data_seek($offset)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function execute()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetch()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function get_warnings()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function result_metadata()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function more_results()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function next_result()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function num_rows()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function send_long_data($param_nr, $data)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function free_result()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function reset()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function prepare($query)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function store_result()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function get_result()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
