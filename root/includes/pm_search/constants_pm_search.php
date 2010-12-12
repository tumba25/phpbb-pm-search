<?php
/**
*
* @package pm_search
* @version $Id: constants_pm_search.php 6 2009-11-15 08:32:26Z jari $
* @copyright (c) 2009 Jari Kanerva tumba25@gmail.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* constants.php
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

define('PM_SENDER', 1);
define('PM_RECIPIENT', 2);
define('PM_BOTH', 3);

define('PM_SUBJECT', 1);
define('PM_MESSAGE', 2);

define('PM_SEARCH_MATCH_ALL', 0);
define('PM_SEARCH_MATCH_WORD', 1);
define('PM_SEARCH_MATCH_EXACT', 2);

?>