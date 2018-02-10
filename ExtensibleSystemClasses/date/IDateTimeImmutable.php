<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std DateTimeImmutable wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\date;

/**
 * Interface for DateTimeImmutable
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
 * @see \DateTimeImmutable
 * @link http://php.net/manual/en/class.datetimeimmutable.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IDateTimeImmutable
{
	const ATOM = 'Y-m-d\TH:i:sP';
	const COOKIE = 'l, d-M-Y H:i:s T';
	const ISO8601 = 'Y-m-d\TH:i:sO';
	const RFC822 = 'D, d M y H:i:s O';
	const RFC850 = 'l, d-M-y H:i:s T';
	const RFC1036 = 'D, d M y H:i:s O';
	const RFC1123 = 'D, d M Y H:i:s O';
	const RFC7231 = 'D, d M Y H:i:s \G\M\T';
	const RFC2822 = 'D, d M Y H:i:s O';
	const RFC3339 = 'Y-m-d\TH:i:sP';
	const RFC3339_EXTENDED = 'Y-m-d\TH:i:s.vP';
	const RSS = 'D, d M Y H:i:s O';
	const W3C = 'Y-m-d\TH:i:sP';

	public function __construct($time, $object);


	public function __wakeup();


	public static function __set_state();


	public static function createFromFormat($format, $time, ?\DateTimeZone $object);


	public static function getLastErrors();


	public function format($format);


	public function getTimezone();


	public function getOffset();


	public function getTimestamp();


	public function diff($object, $absolute);


	public function modify($modify);


	public function add($interval);


	public function sub($interval);


	public function setTimezone($timezone);


	public function setTime($hour, $minute, $second, $microseconds);


	public function setDate($year, $month, $day);


	public function setISODate($year, $week, $day);


	public function setTimestamp($unixtimestamp);


	public static function createFromMutable($DateTime);
}
