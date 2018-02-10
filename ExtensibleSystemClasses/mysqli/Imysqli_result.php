<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std mysqli_result wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\mysqli;

/**
 * Interface for mysqli_result
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
 * @see \mysqli_result
 * @link http://php.net/manual/en/class.mysqli_result.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface Imysqli_result
{
	public function __construct();


	public function close();


	public function free();


	public function data_seek($offset);


	public function fetch_field();


	public function fetch_fields();


	public function fetch_field_direct($field_nr);


	public function fetch_all($result_type);


	public function fetch_array($result_type);


	public function fetch_assoc();


	public function fetch_object($class_name, array $params);


	public function fetch_row();


	public function field_seek($field_nr);


	public function free_result();
}
