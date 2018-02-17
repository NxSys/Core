<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ReflectionParameter wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\Reflection;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use ReflectionParameter as PHP_ReflectionParameter;

/**
 * ReflectionParameter wrapper
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
 * @see \ReflectionParameter
 * @link http://php.net/manual/en/class.reflectionparameter.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class ReflectionParameter implements \Reflector, StdLib\Reflection\IReflectionParameter, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct($function, $parameter)
	{
		$this->_refreshTarget(new PHP_ReflectionParameter(...func_get_args()));
	}


	public function __toString()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isPassedByReference()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function canBePassedByValue()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getDeclaringFunction()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getDeclaringClass()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getClass()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasType()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getType()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isArray()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isCallable()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function allowsNull()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPosition()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isOptional()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isDefaultValueAvailable()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getDefaultValue()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isDefaultValueConstant()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getDefaultValueConstantName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isVariadic()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
