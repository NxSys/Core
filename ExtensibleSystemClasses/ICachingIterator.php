<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std CachingIterator wrapper support file
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
 * Interface for CachingIterator
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
 * @see \CachingIterator
 * @link http://php.net/manual/en/class.cachingiterator.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface ICachingIterator
{
	const CALL_TOSTRING = 1;
	const CATCH_GET_CHILD = 16;
	const TOSTRING_USE_KEY = 2;
	const TOSTRING_USE_CURRENT = 4;
	const TOSTRING_USE_INNER = 8;
	const FULL_CACHE = 256;

	public function __construct(\Iterator $iterator, $flags);


	public function rewind();


	public function valid();


	public function key();


	public function current();


	public function next();


	public function hasNext();


	public function __toString();


	public function getInnerIterator();


	public function getFlags();


	public function setFlags($flags);


	public function offsetGet($index);


	public function offsetSet($index, $newval);


	public function offsetUnset($index);


	public function offsetExists($index);


	public function getCache();


	public function count();
}
