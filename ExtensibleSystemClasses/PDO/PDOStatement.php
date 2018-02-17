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

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use PDOStatement as PHP_PDOStatement;

/**
 * PDOStatement wrapper
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
 * @see \PDOStatement
 * @link http://php.net/manual/en/class.pdostatement.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class PDOStatement implements \Traversable, StdLib\PDO\IPDOStatement, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	function __construct()
	{
		$this->_refreshTarget(new PHP_PDOStatement(...func_get_args()));
	}


	public function execute($bound_input_params)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetch($how, $orientation, $offset)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function bindParam($paramno, &$param, $type, $maxlen, $driverdata)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function bindColumn($column, &$param, $type, $maxlen, $driverdata)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function bindValue($paramno, $param, $type)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function rowCount()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetchColumn($column_number)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetchAll($how, $class_name, $ctor_args)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fetchObject($class_name, $ctor_args)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function errorCode()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function errorInfo()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setAttribute($attribute, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getAttribute($attribute)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function columnCount()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getColumnMeta($column)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setFetchMode($mode, $params)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function nextRowset()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function closeCursor()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function debugDumpParams()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	final public function __wakeup()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	final public function __sleep()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
