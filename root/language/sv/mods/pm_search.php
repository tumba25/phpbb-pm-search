<?php
/**
*
* Search PM folders [Swedish]
*
* @package language
* @version $Id: pm_search.php 11 2009-11-15 19:34:30Z jari $
* @copyright (c) 2009 Peetra http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=327663
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License version 2
*
*/

/**
* DO NOT CHANGE
*/
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RECEIVED_AT' => 'Mottaget',
	'SENDER' => 'Avsändare',
	'BOTH' => 'Båda',

	'PM_SEARCH_EXPLAIN' => 'Placera ett + tecken framför ord som måste hittas och ett - tecken före de som inte ska vara med.',

	'SEARCH_ALL_WORDS' => 'Sök efter alla orden',
	'SEARCH_ANY_WORD' => 'Sök efter vilket ord som helst av de angivna',
	'PM_SEARCH_ALL_WORDS' => 'Sök efter alla ord',
	'PM_SEARCH_ALL_WORDS_EXPLAIN' => 'Välj Ja för att matcha alla ord (jfr +). Välj Nej för att söka efter vilket ord som helst av de angivna. Den här inställningen ignoreras i avsändar- och mottagarsökning.',
	'PM_SEARCH_WORD_ONLY' => 'Sök hela ord.',
	'PM_SEARCH_WORD_ONLY_EXPLAIN' => 'Söker endast efter exakta ord. Välj Nej för att matcha partiella ord. (jfr *) Den här inställningen ignoreras i avsändar- och mottagarsökning.',
	'PM_SEARCH_EXACT_QUERY' => 'Sök efter exakt matchning',
	'PM_SEARCH_EXACT_QUERY_EXPLAIN' => '+ och - tecken tas inte i beaktan då man söker efter exakta träffar med flera ord.',
	'PM_SEARCH_CASE' => 'Skiftlägeskänslig sökning',
	'PM_SEARCH_CASE_EXPLAIN' => 'Välj ja för att skilja på stora och små bokstäver.',
	'PM_SEARCH_CURRENT' => 'Sök i denna mapp',
	'PM_SEARCH_CURRENT_EXPLAIN' => 'Välj nej för att söka i alla pm-mappar.',
	'PM_SEARCH_AUTHOR' => 'Sök efter avsändare eller mottagare',
	'PM_SEARCH_AUTHOR_EXPLAIN' => 'Om man väljer Ja, så söker man efter mottagare och avsändare. Skilj användarnamn med ett kommatecken ifall du vill söka efter flera mottagare eller avsändare. Välj Nej i "Sök efter exakt matchning" i kombination med Ja på denna för att kunna söka efter partiella matchningar av användarnamn.',

	'SEARCH_PM_FOLDERS' => 'Sök i PM-mapp...',

	'UCP_PM_SEARCH' => 'Sök i PM-mappar',
));

?>