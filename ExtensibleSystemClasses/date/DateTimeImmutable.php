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

use DateTimeImmutable as PHP_DateTimeImmutable;
use NxSys\Core\ExtensibleSystemClasses as StdLib;

/**
 * DateTimeImmutable wrapper
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
 * @see \DateTimeImmutable
 * @link http://php.net/manual/en/class.datetimeimmutable.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class DateTimeImmutable implements \DateTimeInterface, StdLib\date\IDateTimeImmutable, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct($time, $object)
	{
		$this->_refreshTarget(new PHP_DateTimeImmutable(...func_get_args()));
	}


	public function __wakeup()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function format($format)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getTimezone()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getOffset()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getTimestamp()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function diff($object, $absolute)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function modify($modify)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function add($interval)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function sub($interval)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setTimezone($timezone)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setTime($hour, $minute, $second, $microseconds)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setDate($year, $month, $day)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setISODate($year, $week, $day)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setTimestamp($unixtimestamp)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
