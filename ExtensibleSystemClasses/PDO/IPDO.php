<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std PDO wrapper support file
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

namespace NxSys\Core\ExtensibleSystemClasses\PDO;

/**
 * Interface for PDO
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
 * @see \PDO
 * @link http://php.net/manual/en/class.pdo.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IPDO
{
	const PARAM_BOOL = 5;
	const PARAM_NULL = 0;
	const PARAM_INT = 1;
	const PARAM_STR = 2;
	const PARAM_LOB = 3;
	const PARAM_STMT = 4;
	const PARAM_INPUT_OUTPUT = -2147483648;
	const PARAM_STR_NATL = 1073741824;
	const PARAM_STR_CHAR = 536870912;
	const PARAM_EVT_ALLOC = 0;
	const PARAM_EVT_FREE = 1;
	const PARAM_EVT_EXEC_PRE = 2;
	const PARAM_EVT_EXEC_POST = 3;
	const PARAM_EVT_FETCH_PRE = 4;
	const PARAM_EVT_FETCH_POST = 5;
	const PARAM_EVT_NORMALIZE = 6;
	const FETCH_LAZY = 1;
	const FETCH_ASSOC = 2;
	const FETCH_NUM = 3;
	const FETCH_BOTH = 4;
	const FETCH_OBJ = 5;
	const FETCH_BOUND = 6;
	const FETCH_COLUMN = 7;
	const FETCH_CLASS = 8;
	const FETCH_INTO = 9;
	const FETCH_FUNC = 10;
	const FETCH_GROUP = 65536;
	const FETCH_UNIQUE = 196608;
	const FETCH_KEY_PAIR = 12;
	const FETCH_CLASSTYPE = 262144;
	const FETCH_SERIALIZE = 524288;
	const FETCH_PROPS_LATE = 1048576;
	const FETCH_NAMED = 11;
	const ATTR_AUTOCOMMIT = 0;
	const ATTR_PREFETCH = 1;
	const ATTR_TIMEOUT = 2;
	const ATTR_ERRMODE = 3;
	const ATTR_SERVER_VERSION = 4;
	const ATTR_CLIENT_VERSION = 5;
	const ATTR_SERVER_INFO = 6;
	const ATTR_CONNECTION_STATUS = 7;
	const ATTR_CASE = 8;
	const ATTR_CURSOR_NAME = 9;
	const ATTR_CURSOR = 10;
	const ATTR_ORACLE_NULLS = 11;
	const ATTR_PERSISTENT = 12;
	const ATTR_STATEMENT_CLASS = 13;
	const ATTR_FETCH_TABLE_NAMES = 14;
	const ATTR_FETCH_CATALOG_NAMES = 15;
	const ATTR_DRIVER_NAME = 16;
	const ATTR_STRINGIFY_FETCHES = 17;
	const ATTR_MAX_COLUMN_LEN = 18;
	const ATTR_EMULATE_PREPARES = 20;
	const ATTR_DEFAULT_FETCH_MODE = 19;
	const ATTR_DEFAULT_STR_PARAM = 21;
	const ERRMODE_SILENT = 0;
	const ERRMODE_WARNING = 1;
	const ERRMODE_EXCEPTION = 2;
	const CASE_NATURAL = 0;
	const CASE_LOWER = 2;
	const CASE_UPPER = 1;
	const NULL_NATURAL = 0;
	const NULL_EMPTY_STRING = 1;
	const NULL_TO_STRING = 2;
	const ERR_NONE = '00000';
	const FETCH_ORI_NEXT = 0;
	const FETCH_ORI_PRIOR = 1;
	const FETCH_ORI_FIRST = 2;
	const FETCH_ORI_LAST = 3;
	const FETCH_ORI_ABS = 4;
	const FETCH_ORI_REL = 5;
	const CURSOR_FWDONLY = 0;
	const CURSOR_SCROLL = 1;
	const MYSQL_ATTR_USE_BUFFERED_QUERY = 1000;
	const MYSQL_ATTR_LOCAL_INFILE = 1001;
	const MYSQL_ATTR_INIT_COMMAND = 1002;
	const MYSQL_ATTR_COMPRESS = 1003;
	const MYSQL_ATTR_DIRECT_QUERY = 1004;
	const MYSQL_ATTR_FOUND_ROWS = 1005;
	const MYSQL_ATTR_IGNORE_SPACE = 1006;
	const MYSQL_ATTR_SSL_KEY = 1007;
	const MYSQL_ATTR_SSL_CERT = 1008;
	const MYSQL_ATTR_SSL_CA = 1009;
	const MYSQL_ATTR_SSL_CAPATH = 1010;
	const MYSQL_ATTR_SSL_CIPHER = 1011;
	const MYSQL_ATTR_SERVER_PUBLIC_KEY = 1012;
	const MYSQL_ATTR_MULTI_STATEMENTS = 1013;
	const MYSQL_ATTR_SSL_VERIFY_SERVER_CERT = 1014;
	const SQLITE_DETERMINISTIC = 2048;

	public function __construct($dsn, $username, $passwd, $options);


	public function prepare($statement, $options);


	public function beginTransaction();


	public function commit();


	public function rollBack();


	public function inTransaction();


	public function setAttribute($attribute, $value);


	public function exec($query);


	public function query();


	public function lastInsertId($seqname);


	public function errorCode();


	public function errorInfo();


	public function getAttribute($attribute);


	public function quote($string, $paramtype);


	final public function __wakeup();


	final public function __sleep();
}