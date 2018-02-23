<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std SQLite3 wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\sqlite3;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use SQLite3 as PHP_SQLite3;

/**
 * SQLite3 wrapper
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
 * @see \SQLite3
 * @link http://php.net/manual/en/class.sqlite3.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class SQLite3 implements StdLib\sqlite3\ISQLite3, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	public function open($filename, $flags, $encryption_key)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function close()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function exec($query)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function lastInsertRowID()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function lastErrorCode()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function lastErrorMsg()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function busyTimeout($ms)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function loadExtension($shared_library)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function changes()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function prepare($query)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function query($query)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function querySingle($query, $entire_row)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createFunction($name, $callback, $argument_count, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createAggregate($name, $step_callback, $final_callback, $argument_count)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function createCollation($name, $callback)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function openBlob($table, $column, $rowid, $dbname, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function enableExceptions($enableExceptions)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	/**
	 * ctor
	 */
	public function __construct($filename, $flags, $encryption_key)
	{
		$this->_refreshTarget(new PHP_SQLite3(...func_get_args()));
	}
}
