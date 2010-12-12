<?php
/**
*
* install script to set up permission options in the db for Search PM folders
* @version $Id: install.php 6 2009-11-15 08:32:26Z jari $
* @copyright (c) 2009 Jari Kanerva tumba25@gmail.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/

// initialize the page
define('IN_PHPBB', true);
define('IN_INSTALL', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/search_pm_folders');

// Setup $auth_admin class so we can add tabulated survey permission options
include($phpbb_root_path . 'includes/acp/auth.' . $phpEx);
$auth_admin = new auth_admin();

$auth_admin->acl_add_option(array(
	'local' => array(),
	'global' => array('u_pm_search')
));

$message = $user->lang['ADDED_PM_SEARCH_PERMISSIONS'] . '<br /><br />' . $user->lang['REMOVE_INSTALL'];
trigger_error($message);

?>