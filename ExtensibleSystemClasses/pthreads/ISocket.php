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

/**
 * Interface for Socket
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
 * @see \Socket
 * @link http://php.net/manual/en/class.socket.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface ISocket extends IThreaded
{
	const AF_UNIX = 1;
	const AF_INET = 2;
	const AF_INET6 = 23;
	const SOCK_STREAM = 1;
	const SOCK_DGRAM = 2;
	const SOCK_RAW = 3;
	const SOCK_SEQPACKET = 5;
	const SOCK_RDM = 4;
	const SO_DEBUG = 1;
	const SO_REUSEADDR = 4;
	const SO_KEEPALIVE = 8;
	const SO_DONTROUTE = 16;
	const SO_LINGER = 128;
	const SO_BROADCAST = 32;
	const SO_OOBINLINE = 256;
	const SO_SNDBUF = 4097;
	const SO_RECBUF = 4098;
	const SO_SNDLOWAT = 4099;
	const SO_RCVLOWAT = 4100;
	const SO_SNDTIMEO = 4101;
	const SO_RCVTIMEO = 4102;
	const SO_TYPE = 4104;
	const SO_ERROR = 4103;
	const SOMAXCONN = 2147483647;
	const TCP_NODELAY = 1;
	const SOL_SOCKET = 65535;
	const SOL_TCP = 6;
	const SOL_UDP = 17;
	const MSG_OOB = 1;
	const MSG_WAITALL = 8;
	const MSG_CTRUNC = 512;
	const MSG_TRUNC = 256;
	const MSG_PEEK = 2;
	const MSG_DONTROUTE = 4;
	const EINTR = 10004;
	const EBADF = 10009;
	const EACCES = 10013;
	const EFAULT = 10014;
	const EINVAL = 10022;
	const EMFILE = 10024;
	const EWOULDBLOCK = 10035;
	const EINPROGRESS = 10036;
	const EALREADY = 10037;
	const ENOTSOCK = 10038;
	const EDESTADDRREQ = 10039;
	const EMSGSIZE = 10040;
	const EPROTOTYPE = 10041;
	const ENOPROTOOPT = 10042;
	const EPROTONOSUPPORT = 10043;
	const ESOCKTNOSUPPORT = 10044;
	const EOPNOTSUPP = 10045;
	const EPFNOSUPPORT = 10046;
	const EAFNOSUPPORT = 10047;
	const EADDRINUSE = 10048;
	const EADDRNOTAVAIL = 10049;
	const ENETDOWN = 10050;
	const ENETUNREACH = 10051;
	const ENETRESET = 10052;
	const ECONNABORTED = 10053;
	const ECONNRESET = 10054;
	const ENOBUFS = 10055;
	const EISCONN = 10056;
	const ENOTCONN = 10057;
	const ESHUTDOWN = 10058;
	const ETOOMANYREFS = 10059;
	const ETIMEDOUT = 10060;
	const ECONNREFUSED = 10061;
	const ELOOP = 10062;
	const ENAMETOOLONG = 10063;
	const EHOSTDOWN = 10064;
	const EHOSTUNREACH = 10065;
	const ENOTEMPTY = 10066;
	const EPROCLIM = 10067;
	const EUSERS = 10068;
	const EDQUOT = 10069;
	const ESTALE = 10070;
	const EREMOTE = 10071;
	const EDISCON = 10101;
	const SYSNOTREADY = 10091;
	const VERNOTSUPPORTED = 10092;
	const NOTINITIALISED = 10093;
	const HOST_NOT_FOUND = 11001;
	const TRY_AGAIN = 11002;
	const NO_RECOVERY = 11003;
	const NO_DATA = 11004;
	const NO_ADDRESS = 11004;

	public function __construct(int $domain, int $type, int $protocol);


	public function setOption(int $level, int $name, int $value): bool;


	public function getOption(int $level, int $name): int;


	public function bind(string $host, int $port): bool;


	public function listen(int $backlog): bool;


	public function accept($class);


	public function connect(string $host, int $port): bool;


	public function read(int $length, int $flags): string;


	public function write(string $buffer, int $length): int;


	public function send(string $buffer, int $length, int $flags): int;


	public function setBlocking(bool $blocking): bool;


	public function getPeerName(bool $port): array;


	public function getSockName(bool $port): array;


	public function close();
}
