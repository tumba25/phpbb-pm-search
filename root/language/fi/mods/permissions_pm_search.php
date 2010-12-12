<?php
/**
*
* Search PM folders [Finnish]
*
* @package language
* @version $Id: permissions_pm_search.php 18 2009-11-28 00:54:53Z jari $
* @copyright (c) 2009 Peetra http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=327663
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License version 2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Adding new category
$lang['permission_cat']['pm_search'] = 'Search PM folders';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_u_pm_search' => array('lang' => 'Voi käyttää YV-hakua.', 'cat' => 'pm'),
));
?>