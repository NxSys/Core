<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ReflectionClassConstant wrapper support file
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
 * Interface for ReflectionClassConstant
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
 * @see \ReflectionClassConstant
 * @link http://php.net/manual/en/class.reflectionclassconstant.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IReflectionClassConstant
{
	public static function export($class, $name, $return);


	public function __construct($class, $name);


	public function __toString();


	public function getName();


	public function getValue();


	public function isPublic();


	public function isPrivate();


	public function isProtected();


	public function getModifiers();


	public function getDeclaringClass();


	public function getDocComment();
}
