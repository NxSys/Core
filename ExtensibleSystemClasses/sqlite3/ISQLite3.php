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

/**
 * Interface for SQLite3
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
 * @see \SQLite3
 * @link http://php.net/manual/en/class.sqlite3.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface ISQLite3
{
	public function open($filename, $flags, $encryption_key);


	public function close();


	public function exec($query);


	public function lastInsertRowID();


	public function lastErrorCode();


	public function lastErrorMsg();


	public function busyTimeout($ms);


	public function loadExtension($shared_library);


	public function changes();


	public function prepare($query);


	public function query($query);


	public function querySingle($query, $entire_row);


	public function createFunction($name, $callback, $argument_count, $flags);


	public function createAggregate($name, $step_callback, $final_callback, $argument_count);


	public function createCollation($name, $callback);


	public function openBlob($table, $column, $rowid, $dbname, $flags);


	public function enableExceptions($enableExceptions);


	public function __construct($filename, $flags, $encryption_key);
}
