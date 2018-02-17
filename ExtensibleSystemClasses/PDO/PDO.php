<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std PDO wrapper support file
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
use PDO as PHP_PDO;

/**
 * PDO wrapper
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
 * @see \PDO
 * @link http://php.net/manual/en/class.pdo.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class PDO implements StdLib\PDO\IPDO, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct($dsn, $username, $passwd, $options)
	{
		$this->_refreshTarget(new PHP_PDO(...func_get_args()));
	}


	public function prepare($statement, $options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function beginTransaction()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function commit()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function rollBack()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function inTransaction()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setAttribute($attribute, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function exec($query)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function query()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function lastInsertId($seqname)
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


	public function getAttribute($attribute)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function quote($string, $paramtype)
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
