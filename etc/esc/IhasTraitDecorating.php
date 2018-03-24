<?php
/**
 * #####
 *
 * $Id: IhasTraitDecorating.php 24 2017-04-11 06:54:39Z nxs.cfeamster $
 *
 * @link http://nxsys.org/spaces/onx/wiki/Nexus_Common_Library
 * @package NxSys.Library\IO
 * @license http://nxsys.org/spaces/onx/wiki/License
 * Please see the license.txt file or the url above for full copyright and license information.
 * @copyright Copyright 2016 Nexus Systems, Inc.
 *
 * @author Chris R. Feamster <cfeamster@nxsysts.com>
 * @author $LastChangedBy: nxs.cfeamster $
 *
 * @version $Revision: 24 $
 */

/** Local Namespace **/
namespace NxSys\Core\ExtensibleSystemClasses;

// Project Namespaces

// 3rdParty Namespaces


/**
 * This interface describes the contract fulfilled by using the trait "DecoratingTrait"
 *
 * @see DecoratingTrait
 */
interface IhasTraitDecorating
{
	function __get($sLabel);
	function __set($sLabel, $mValue);
	function __isset($sLabel);
	function __unset($sLabel);
	function __call($sLabel, $mValue);
	static function _setTarget($oTarget);
}
