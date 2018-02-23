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

/**
 * Interface for Threaded
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
 * @see \Threaded
 * @link http://php.net/manual/en/class.threaded.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IThreaded
{
	public function run();


	public function wait(?int $timeout);


	public function notify();


	public function notifyOne();


	public function isRunning();


	public function isTerminated();


	public function synchronized($function);


	public function merge($from, $overwrite);


	public function shift();


	public function chunk($size, $preserve);


	public function pop();


	public function count();


	public function isGarbage(): bool;


	public function addRef();


	public function delRef();


	public function getRefCount();
}
