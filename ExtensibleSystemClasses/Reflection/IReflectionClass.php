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

/**
 * Interface for ReflectionClass
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
 * @see \ReflectionClass
 * @link http://php.net/manual/en/class.reflectionclass.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IReflectionClass
{
	const IS_IMPLICIT_ABSTRACT = 16;
	const IS_EXPLICIT_ABSTRACT = 32;
	const IS_FINAL = 4;

	public static function export($argument, $return);


	public function __construct($argument);


	public function __toString();


	public function getName();


	public function isInternal();


	public function isUserDefined();


	public function isAnonymous();


	public function isInstantiable();


	public function isCloneable();


	public function getFileName();


	public function getStartLine();


	public function getEndLine();


	public function getDocComment();


	public function getConstructor();


	public function hasMethod($name);


	public function getMethod($name);


	public function getMethods($filter);


	public function hasProperty($name);


	public function getProperty($name);


	public function getProperties($filter);


	public function hasConstant($name);


	public function getConstants();


	public function getReflectionConstants();


	public function getConstant($name);


	public function getReflectionConstant($name);


	public function getInterfaces();


	public function getInterfaceNames();


	public function isInterface();


	public function getTraits();


	public function getTraitNames();


	public function getTraitAliases();


	public function isTrait();


	public function isAbstract();


	public function isFinal();


	public function getModifiers();


	public function isInstance($object);


	public function newInstance($args);


	public function newInstanceWithoutConstructor();


	public function newInstanceArgs(array $args);


	public function getParentClass();


	public function isSubclassOf($class);


	public function getStaticProperties();


	public function getStaticPropertyValue($name, $default);


	public function setStaticPropertyValue($name, $value);


	public function getDefaultProperties();


	public function isIterable();


	public function isIterateable();


	public function implementsInterface($interface);


	public function getExtension();


	public function getExtensionName();


	public function inNamespace();


	public function getNamespaceName();


	public function getShortName();
}
