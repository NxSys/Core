<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ZMQSocket wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\zmq;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use ZMQSocket as PHP_ZMQSocket;

/**
 * ZMQSocket wrapper
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
 * @see \ZMQSocket
 * @link http://php.net/manual/en/class.zmqsocket.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class ZMQSocket implements StdLib\zmq\IZMQSocket, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	final public function __construct(\ZMQContext $ZMQContext, $type, $persistent_id, $on_new_socket)
	{
		$this->_refreshTarget(new PHP_ZMQSocket(...func_get_args()));
	}


	public function send($message, $mode)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function recv($mode)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function sendmulti($message, $mode)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function recvmulti($mode)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function bind($dsn, $force)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function connect($dsn, $force)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function monitor($dsn, $events)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function recvevent($flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function unbind($dsn)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function disconnect($dsn)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setsockopt($key, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getendpoints()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getsockettype()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function ispersistent()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getpersistentid()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getsockopt($key)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function sendmsg($message, $mode)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function recvmsg($mode)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
