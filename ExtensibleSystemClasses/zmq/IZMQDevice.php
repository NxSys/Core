<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ZMQDevice wrapper support file
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
 * Interface for ZMQDevice
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
 * @see \ZMQDevice
 * @link http://php.net/manual/en/class.zmqdevice.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IZMQDevice
{
	final public function __construct(\ZMQSocket $frontend, \ZMQSocket $backend, \ZMQSocket $capture);


	public function run();


	public function setidlecallback($idle_callback, $timeout, $user_data);


	public function setidletimeout($timeout);


	public function getidletimeout();


	public function settimercallback($idle_callback, $timeout, $user_data);


	public function settimertimeout($timeout);


	public function gettimertimeout();
}
