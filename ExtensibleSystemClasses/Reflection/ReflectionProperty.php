<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ReflectionProperty wrapper support file
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
use ReflectionProperty as PHP_ReflectionProperty;

/**
 * ReflectionProperty wrapper
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
 * @see \ReflectionProperty
 * @link http://php.net/manual/en/class.reflectionproperty.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class ReflectionProperty implements \Reflector, StdLib\Reflection\IReflectionProperty, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct($class, $name)
	{
		$this->_refreshTarget(new PHP_ReflectionProperty(...func_get_args()));
	}


	public function __toString()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getValue($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setValue($object, $value)
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


	public function isStatic()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isDefault()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getModifiers()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getDeclaringClass()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getDocComment()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setAccessible($visible)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
