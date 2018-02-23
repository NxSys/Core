<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std Threaded wrapper support file
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
use Threaded as PHP_Threaded;

/**
 * Threaded wrapper
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
 * @see \Threaded
 * @link http://php.net/manual/en/class.threaded.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class Threaded implements \Traversable, \Collectable, StdLib\pthreads\IThreaded, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	function __construct()
	{
		$this->_refreshTarget(new PHP_Threaded(...func_get_args()));
	}


	public function run()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function wait(?int $timeout)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function notify()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function notifyOne()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isRunning()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isTerminated()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function synchronized($function)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function merge($from, $overwrite)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function shift()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function chunk($size, $preserve)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function pop()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function count()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isGarbage(): bool
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function addRef()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function delRef()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getRefCount()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
