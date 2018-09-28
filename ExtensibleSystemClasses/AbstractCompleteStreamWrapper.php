<?php
/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std AbstractCompleteStreamWrapper wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses;

use NxSys\Core\ExtensibleSystemClasses as StdLib;

/**
 * AbstractCompleteStreamWrapper wrapper
 *
 * It serves as abstraction a of the respective interface
 *
 * @see ICompleteStreamWrapper
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 * @link http://php.net/manual/en/class.streamwrapper.php
 */
abstract class AbstractCompleteStreamWrapper implements StdLib\ICompleteStreamWrapper
{
	/* Properties */
	/**
	 * @var resouce context
	 * @link http://php.net/manual/en/class.streamwrapper.php#streamwrapper.props.context
	 */
	public $context;
}
