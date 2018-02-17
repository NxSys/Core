<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ReflectionFunctionAbstract wrapper support file
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
use ReflectionFunctionAbstract as PHP_ReflectionFunctionAbstract;

/**
 * ReflectionFunctionAbstract wrapper
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
 * @see \ReflectionFunctionAbstract
 * @link http://php.net/manual/en/class.reflectionfunctionabstract.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class ReflectionFunctionAbstract implements \Reflector, StdLib\Reflection\IReflectionFunctionAbstract, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	function __construct()
	{
		$this->_refreshTarget(new PHP_ReflectionFunctionAbstract(...func_get_args()));
	}


	public function inNamespace()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isClosure()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isDeprecated()
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


	public function isGenerator()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function isVariadic()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getClosureThis()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getClosureScopeClass()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getDocComment()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getEndLine()
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


	public function getFileName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getNamespaceName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getNumberOfParameters()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getNumberOfRequiredParameters()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getParameters()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getShortName()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getStartLine()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getStaticVariables()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function returnsReference()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasReturnType()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getReturnType()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
