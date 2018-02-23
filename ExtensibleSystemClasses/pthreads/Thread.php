<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std Thread wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\pthreads;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use Thread as PHP_Thread;

/**
 * Thread wrapper
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
 * @see \Thread
 * @link http://php.net/manual/en/class.thread.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class Thread extends StdLib\pthreads\Threaded implements \Collectable, \Traversable, StdLib\pthreads\IThread, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	function __construct()
	{
		$this->_refreshTarget(new PHP_Thread(...func_get_args()));
	}


	public function start(?int $options)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function join()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isStarted()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isJoined()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getThreadId()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getCreatorId()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
