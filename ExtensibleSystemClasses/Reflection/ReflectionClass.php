<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ReflectionClass wrapper support file
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
use ReflectionClass as PHP_ReflectionClass;

/**
 * ReflectionClass wrapper
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
 * @see \ReflectionClass
 * @link http://php.net/manual/en/class.reflectionclass.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class ReflectionClass implements \Reflector, StdLib\Reflection\IReflectionClass, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct($argument)
	{
		$this->_refreshTarget(new PHP_ReflectionClass(...func_get_args()));
	}


	public function __toString()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isInternal()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isUserDefined()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isAnonymous()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isInstantiable()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isCloneable()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getFileName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getStartLine()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getEndLine()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getDocComment()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getConstructor()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasMethod($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getMethod($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getMethods($filter)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasProperty($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getProperty($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getProperties($filter)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasConstant($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getConstants()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getReflectionConstants()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getConstant($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getReflectionConstant($name)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getInterfaces()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getInterfaceNames()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isInterface()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getTraits()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getTraitNames()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getTraitAliases()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isTrait()
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


	public function getModifiers()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isInstance($object)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function newInstance($args)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function newInstanceWithoutConstructor()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function newInstanceArgs(array $args)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getParentClass()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isSubclassOf($class)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getStaticProperties()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getStaticPropertyValue($name, $default)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setStaticPropertyValue($name, $value)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getDefaultProperties()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isIterable()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isIterateable()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function implementsInterface($interface)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getExtension()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getExtensionName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function inNamespace()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getNamespaceName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getShortName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
