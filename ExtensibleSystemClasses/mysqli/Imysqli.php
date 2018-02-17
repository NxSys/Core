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

/**
 * Interface for mysqli
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
 * @see \mysqli
 * @link http://php.net/manual/en/class.mysqli.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface Imysqli
{
	public function autocommit($mode);


	public function begin_transaction($flags, $name);


	public function change_user($user, $password, $database);


	public function character_set_name();


	public function close();


	public function commit($flags, $name);


	public function connect($host, $user, $password, $database, $port, $socket);


	public function dump_debug_info();


	public function debug($debug_options);


	public function get_charset();


	public function get_client_info();


	public function get_connection_stats();


	public function get_server_info();


	public function get_warnings();


	public function init();


	public function kill($connection_id);


	public function multi_query($query);


	public function __construct($host, $user, $password, $database, $port, $socket);


	public function more_results();


	public function next_result();


	public function options($option, $value);


	public function ping();


	public function prepare($query);


	public function query($query, $resultmode);


	public function real_connect($host, $user, $password, $database, $port, $socket, $flags);


	public function real_escape_string($string_to_escape);


	public function reap_async_query();


	public function escape_string($string_to_escape);


	public function real_query($query);


	public function release_savepoint($name);


	public function rollback($flags, $name);


	public function savepoint($name);


	public function select_db($database);


	public function set_charset($charset);


	public function set_opt($option, $value);


	public function ssl_set($key, $cert, $certificate_authority, $certificate_authority_path, $cipher);


	public function stat();


	public function stmt_init();


	public function store_result($flags);


	public function thread_safe();


	public function use_result();


	public function refresh($options);
}
