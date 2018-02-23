<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std Pool wrapper support file
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
use Pool as PHP_Pool;

/**
 * Pool wrapper
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
 * @see \Pool
 * @link http://php.net/manual/en/class.pool.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class Pool implements StdLib\pthreads\IPool, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct(int $size, ?string $class, ?array $ctor)
	{
		$this->_refreshTarget(new PHP_Pool(...func_get_args()));
	}


	public function resize(int $size)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function submit(\Threaded $task)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function submitTo(int $worker, \Threaded $task)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function collect(\Closure $collector)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function shutdown()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
