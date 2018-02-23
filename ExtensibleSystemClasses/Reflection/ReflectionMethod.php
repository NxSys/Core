<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ReflectionMethod wrapper support file
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
use ReflectionMethod as PHP_ReflectionMethod;

/**
 * ReflectionMethod wrapper
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
 * @see \ReflectionMethod
 * @link http://php.net/manual/en/class.reflectionmethod.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class ReflectionMethod extends StdLib\Reflection\ReflectionFunctionAbstract implements \Reflector, StdLib\Reflection\IReflectionMethod, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct($class_or_method, $name)
	{
		$this->_refreshTarget(new PHP_ReflectionMethod(...func_get_args()));
	}


	public function __toString()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isPublic()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isPrivate()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isProtected()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isAbstract()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isFinal()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isStatic()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isConstructor()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isDestructor()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getClosure($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getModifiers()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function invoke($object, $args)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function invokeArgs($object, array $args)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getDeclaringClass()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getPrototype()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setAccessible($value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
