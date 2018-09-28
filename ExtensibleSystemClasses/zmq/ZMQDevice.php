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

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use ZMQDevice as PHP_ZMQDevice;

/**
 * ZMQDevice wrapper
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
 * @see \ZMQDevice
 * @link http://php.net/manual/en/class.zmqdevice.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class ZMQDevice implements StdLib\zmq\IZMQDevice, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	final public function __construct(\ZMQSocket $frontend, \ZMQSocket $backend, \ZMQSocket $capture)
	{
		$this->_refreshTarget(new PHP_ZMQDevice(...func_get_args()));
	}


	public function run()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setidlecallback($idle_callback, $timeout, $user_data)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setidletimeout($timeout)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getidletimeout()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function settimercallback($idle_callback, $timeout, $user_data)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function settimertimeout($timeout)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function gettimertimeout()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
