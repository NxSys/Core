<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std RecursiveIteratorIterator wrapper support file
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
 * Interface for RecursiveIteratorIterator
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
 * @see \RecursiveIteratorIterator
 * @link http://php.net/manual/en/class.recursiveiteratoriterator.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IRecursiveIteratorIterator
{
	const LEAVES_ONLY = 0;
	const SELF_FIRST = 1;
	const CHILD_FIRST = 2;
	const CATCH_GET_CHILD = 16;

	public function __construct(\Traversable $iterator, $mode, $flags);


	public function rewind();


	public function valid();


	public function key();


	public function current();


	public function next();


	public function getDepth();


	public function getSubIterator($level);


	public function getInnerIterator();


	public function beginIteration();


	public function endIteration();


	public function callHasChildren();


	public function callGetChildren();


	public function beginChildren();


	public function endChildren();


	public function nextElement();


	public function setMaxDepth($max_depth);


	public function getMaxDepth();
}
