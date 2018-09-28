<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std mysqli wrapper support file
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
use mysqli as PHP_mysqli;

/**
 * mysqli wrapper
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
 * @see \mysqli
 * @link http://php.net/manual/en/class.mysqli.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class mysqli implements StdLib\mysqli\Imysqli, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	public function autocommit($mode)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function begin_transaction($flags, $name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function change_user($user, $password, $database)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function character_set_name()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function close()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function commit($flags, $name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function connect($host, $user, $password, $database, $port, $socket)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function dump_debug_info()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function debug($debug_options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function get_charset()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function get_client_info()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function get_connection_stats()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function get_server_info()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function get_warnings()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function init()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function kill($connection_id)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function multi_query($query)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	/**
	 * ctor
	 */
	public function __construct($host, $user, $password, $database, $port, $socket)
	{
		$this->_refreshTarget(new PHP_mysqli(...func_get_args()));
	}


	public function more_results()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function next_result()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function options($option, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function ping()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function prepare($query)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function query($query, $resultmode)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function real_connect($host, $user, $password, $database, $port, $socket, $flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function real_escape_string($string_to_escape)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function reap_async_query()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function escape_string($string_to_escape)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function real_query($query)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function release_savepoint($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function rollback($flags, $name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function savepoint($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function select_db($database)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function set_charset($charset)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function set_opt($option, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function ssl_set($key, $cert, $certificate_authority, $certificate_authority_path, $cipher)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function stat()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function stmt_init()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function store_result($flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function thread_safe()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function use_result()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function refresh($options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
