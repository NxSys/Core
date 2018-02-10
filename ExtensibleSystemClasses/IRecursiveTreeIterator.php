<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std RecursiveTreeIterator wrapper support file
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
 * Interface for RecursiveTreeIterator
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
 * @see \RecursiveTreeIterator
 * @link http://php.net/manual/en/class.recursivetreeiterator.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IRecursiveTreeIterator
{
	const LEAVES_ONLY = 0;
	const SELF_FIRST = 1;
	const CHILD_FIRST = 2;
	const CATCH_GET_CHILD = 16;
	const BYPASS_CURRENT = 4;
	const BYPASS_KEY = 8;
	const PREFIX_LEFT = 0;
	const PREFIX_MID_HAS_NEXT = 1;
	const PREFIX_MID_LAST = 2;
	const PREFIX_END_HAS_NEXT = 3;
	const PREFIX_END_LAST = 4;
	const PREFIX_RIGHT = 5;

	public function __construct(\Traversable $iterator, $flags, $caching_it_flags, $mode);


	public function rewind();


	public function valid();


	public function key();


	public function current();


	public function next();


	public function beginIteration();


	public function endIteration();


	public function callHasChildren();


	public function callGetChildren();


	public function beginChildren();


	public function endChildren();


	public function nextElement();


	public function getPrefix();


	public function setPrefixPart($part, $value);


	public function getEntry();


	public function setPostfix();


	public function getPostfix();
}
