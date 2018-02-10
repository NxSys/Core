<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std SplFileInfo wrapper support file
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

/**
 * Interface for SplFileInfo
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
 * @see \SplFileInfo
 * @link http://php.net/manual/en/class.splfileinfo.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface ISplFileInfo
{
	public function __construct($file_name);


	public function getPath();


	public function getFilename();


	public function getExtension();


	public function getBasename($suffix);


	public function getPathname();


	public function getPerms();


	public function getInode();


	public function getSize();


	public function getOwner();


	public function getGroup();


	public function getATime();


	public function getMTime();


	public function getCTime();


	public function getType();


	public function isWritable();


	public function isReadable();


	public function isExecutable();


	public function isFile();


	public function isDir();


	public function isLink();


	public function getLinkTarget();


	public function getRealPath();


	public function getFileInfo($class_name);


	public function getPathInfo($class_name);


	public function openFile($open_mode, $use_include_path, $context);


	public function setFileClass($class_name);


	public function setInfoClass($class_name);


	final public function _bad_state_ex();


	public function __toString();
}
