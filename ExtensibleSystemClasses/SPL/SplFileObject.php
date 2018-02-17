<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std SplFileObject wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\SPL;

use NxSys\Core\ExtensibleSystemClasses as StdLib;
use SplFileObject as PHP_SplFileObject;

/**
 * SplFileObject wrapper
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
 * @see \SplFileObject
 * @link http://php.net/manual/en/class.splfileobject.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
class SplFileObject extends StdLib\SPL\SplFileInfo implements \RecursiveIterator, \Traversable, \Iterator, \SeekableIterator, StdLib\SPL\ISplFileObject, StdLib\IhasTraitDecorating
{
	use StdLib\DecoratingTrait;

	/**
	 * ctor
	 */
	public function __construct($file_name, $open_mode, $use_include_path, $context)
	{
		$this->_refreshTarget(new PHP_SplFileObject(...func_get_args()));
	}


	public function rewind()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function eof()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function valid()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fgets()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fgetcsv($delimiter, $enclosure, $escape)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fputcsv($fields, $delimiter, $enclosure, $escape)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setCsvControl($delimiter, $enclosure, $escape)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getCsvControl()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function flock($operation, &$wouldblock)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fflush()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function ftell()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fseek($pos, $whence)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fgetc()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fpassthru()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fgetss($allowable_tags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fscanf($format, &...$vars)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fwrite($str, $length)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fread($length)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function fstat()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function ftruncate($size)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function current()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function key()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function next()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setFlags($flags)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getFlags()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function setMaxLineLen($max_len)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getMaxLineLen()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function hasChildren()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getChildren()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function seek($line_pos)
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function getCurrentLine()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}


	public function __toString()
	{
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
