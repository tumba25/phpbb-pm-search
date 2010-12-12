<?php
/**
*
* @package pm_search
* @version $Id: functions_pm_search.php 6 2009-11-15 08:32:26Z jari $
* @copyright (c) 2009 Jari Kanerva tumba25@gmail.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* functions_pm_search.php
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

include($phpbb_root_path . 'includes/pm_search/constants_pm_search.' . $phpEx);

/**
* pm_search_hilit
*
* function for hiliting search keywords, mostly copied from viewtopic.php
*/
function pm_search_hilit($message)
{
	global $user, $db, $template, $config, $auth, $phpbb_root_path, $phpEx;

	$hilit_words = request_var('hilit', '', true);
	$match = request_var('match', PM_SEARCH_MATCH_ALL);

	$highlight_match = '';
	if($hilit_words)
	{
		if($match == PM_SEARCH_MATCH_EXACT)
		{
			$highlight_match = str_replace('%20', ' ', $hilit_words);
		}
		else
		{
			foreach(explode(' ', trim($hilit_words)) as $word)
			{
				if(trim($word))
				{
					$word = str_replace('\*', '\w+?', preg_quote($word, '#'));
					$word = preg_replace('#(^|\s)\\\\w\*\?(\s|$)#', '$1\w+?$2', $word);
					$highlight_match .= (($highlight_match != '') ? '|' : '') . $word;
				}
			}
		}
	}

	if($highlight_match)
	{
		if($match == PM_SEARCH_MATCH_WORD)
		{
			$message = preg_replace('#(?!<.*)(?<!\w)(' . $highlight_match . ')(?!\w|[^<>]*(?:</s(?:cript|tyle))?>)#is', '<span class="posthilit">\1</span>', $message);
		}
		else
		{
			$message = preg_replace('#(?!<.*)(?<!\.)(' . $highlight_match . ')(?!\.|[^<>]*(?:</s(?:cript|tyle))?>)#is', '<span class="posthilit">\1</span>', $message);
		}
	}

	return($message);
}

/**
* pm_search_viewfolder_setup
*
* Setup for includes/ucp/ucp_pm_viewfolder.php
*/
function pm_search_viewfolder_setup($folder_id, $start)
{
	global $user, $db, $template, $config, $auth, $phpbb_root_path, $phpEx;

	if(!$auth->acl_get('u_pm_search'))
	{
		return('');
	}

	$pm_search_enabled = is_pm_search();

	$user->add_lang(array('search', 'mods/pm_search'));
	$pm_advanced = request_var('pmsearch', '');

	$tpl_vars = array(
		'S_DISPLAY_SEARCHBOX'	=> ($auth->acl_get('u_search') && $config['load_search'] && $pm_search_enabled) ? true : false,
		'S_PM_SEARCHBOX_ACTION'	=> append_sid("{$phpbb_root_path}ucp.$phpEx", "mode=view&amp;action=view_folder&amp;f=$folder_id" . (($start !== 0) ? "&amp;start=$start" : '') . (($pm_advanced == '') ? '&amp;pmsearch=advanced' : '')),
		'SEARCH_KEYWORDS' => $user->lang['SEARCH_PM_FOLDERS'],
		'S_PM_SEARCH_ADVANCED' => append_sid("{$phpbb_root_path}ucp.$phpEx", "i=pm&amp;mode=view&amp;action=view_folder&amp;f=$folder_id" . (($start !== 0) ? "&amp;start=$start" : '') . (($pm_advanced == '') ? '&amp;pmsearch=advanced' : '')),
		'DISPLAY_ADVANCED' => ($pm_advanced == '') ? 'none' : 'block',

		'C_PM_SENDER' => PM_SENDER,
		'C_PM_RECIPIENT' => PM_RECIPIENT,
		'C_PM_BOTH' => PM_BOTH,
		'C_PM_SUBJECT' => PM_SUBJECT,
		'C_PM_MESSAGE' => PM_MESSAGE,

		'S_SEARCH_ALL_WORDS' => TRUE,
		'S_WITHIN_BOTH' => TRUE,
	);

	return($tpl_vars);
}

/**
* is_pm_search
*
* Check if pm_search module is active.
*/
function is_pm_search()
{
	global $db;

	// Check if the search-module is active
	$sql = 'SELECT module_enabled FROM ' . MODULES_TABLE . '
		WHERE module_basename = "pm"
		AND module_mode = "search"';
	$result = $db->sql_query($sql);
	$pm_search_enabled = (int) $db->sql_fetchfield('module_enabled');
	$db->sql_freeresult($result);

	return($pm_search_enabled);
}

?>