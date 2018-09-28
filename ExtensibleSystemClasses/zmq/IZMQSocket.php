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

/**
 * Interface for ZMQSocket
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
 * @see \ZMQSocket
 * @link http://php.net/manual/en/class.zmqsocket.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IZMQSocket
{
	final public function __construct(\ZMQContext $ZMQContext, $type, $persistent_id, $on_new_socket);


	public function send($message, $mode);


	public function recv($mode);


	public function sendmulti($message, $mode);


	public function recvmulti($mode);


	public function bind($dsn, $force);


	public function connect($dsn, $force);


	public function monitor($dsn, $events);


	public function recvevent($flags);


	public function unbind($dsn);


	public function disconnect($dsn);


	public function setsockopt($key, $value);


	public function getendpoints();


	public function getsockettype();


	public function ispersistent();


	public function getpersistentid();


	public function getsockopt($key);


	public function sendmsg($message, $mode);


	public function recvmsg($mode);
}
