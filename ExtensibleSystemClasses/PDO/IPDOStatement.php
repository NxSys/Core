<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std PDOStatement wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\PDO;

/**
 * Interface for PDOStatement
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
 * @see \PDOStatement
 * @link http://php.net/manual/en/class.pdostatement.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IPDOStatement
{
	public function execute($bound_input_params);


	public function fetch($how, $orientation, $offset);


	public function bindParam($paramno, &$param, $type, $maxlen, $driverdata);


	public function bindColumn($column, &$param, $type, $maxlen, $driverdata);


	public function bindValue($paramno, $param, $type);


	public function rowCount();


	public function fetchColumn($column_number);


	public function fetchAll($how, $class_name, $ctor_args);


	public function fetchObject($class_name, $ctor_args);


	public function errorCode();


	public function errorInfo();


	public function setAttribute($attribute, $value);


	public function getAttribute($attribute);


	public function columnCount();


	public function getColumnMeta($column);


	public function setFetchMode($mode, $params);


	public function nextRowset();


	public function closeCursor();


	public function debugDumpParams();


	final public function __wakeup();


	final public function __sleep();
}
