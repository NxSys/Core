<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std Socket wrapper support file
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
use Socket as PHP_Socket;

/**
 * Socket wrapper
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
 * @see \Socket
 * @link http://php.net/manual/en/class.socket.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class Socket extends StdLib\pthreads\Threaded implements \Collectable, \Traversable, StdLib\pthreads\ISocket, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct(int $domain, int $type, int $protocol)
	{
		$this->_refreshTarget(new PHP_Socket(...func_get_args()));
	}


	public function setOption(int $level, int $name, int $value): bool
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getOption(int $level, int $name): int
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function bind(string $host, int $port): bool
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function listen(int $backlog): bool
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function accept($class)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function connect(string $host, int $port): bool
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function read(int $length, int $flags): string
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function write(string $buffer, int $length): int
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function send(string $buffer, int $length, int $flags): int
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setBlocking(bool $blocking): bool
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPeerName(bool $port): array
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getSockName(bool $port): array
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function close()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
