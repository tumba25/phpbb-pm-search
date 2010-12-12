<?php
/**
*
* Search PM folders [Finnish]
*
* @package language
* @version $Id: pm_search.php 6 2009-11-15 08:32:26Z jari $
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
	'DATE' => 'Päivä',
	'RECEIVED_AT' => 'Vastaanotettu',
	'SENDER' => 'Lähettäjä',
	'BOTH' => 'Molemmat',


	'PM_SEARCH_EXPLAIN' => 'Laita + merkki sanan eteen jonka täytyy löytyä ja - merkki sanan eteen, jota et halua hakea.',
	'SEARCH_ALL_WORDS' => 'Etsi kaikilla sanoilla',
	'SEARCH_ANY_WORD' => 'Etsi mikä tahansa annetuista sanoista.',
	'PM_SEARCH_ALL_WORDS' => 'Etsi kaikia sanoja',
	'PM_SEARCH_ALL_WORDS_EXPLAIN' => 'Valitse Kyllä löytääksesi viestejä jotka sisältävät kaikki sanat (vrt +). Valitse Ei löytääksesi viestit, jotka sisältävät joitakin haettavissa olevista sanoista. Voit silloin laittaa + joidenkin sanojen eteen. Etsi Lähettäjä /Vastaanottaja ei huomioi tätä säädöstä.',
	'PM_SEARCH_WORD_ONLY' => 'Etsi täsmäsanoja',
	'PM_SEARCH_WORD_ONLY_EXPLAIN' => 'Kyllä etsii kokonaisia sanoja. Valinta Ei etsii osittaisia osumia (vrt *)  Etsi Lähettäjä ja/tai vastaanottaja ei huomioi tätä säädöstä.',
	'PM_SEARCH_EXACT_QUERY' => 'Etsi tarkka sanajono.',
	'PM_SEARCH_EXACT_QUERY_EXPLAIN' => 'Valitse Kyllä jos haluat etsiä sanat kirjoittamassasi järjestyksessä (+ ja - eivät toimi tämän vaihtoehdon kanssa)',
	'PM_SEARCH_CASE' => 'Merkkikokoriippuvainen haku',
	'PM_SEARCH_CASE_EXPLAIN' => 'Valitse Kyllä jos haluat että haku huomioi isot ja pienet kirjaimet.',
	'PM_SEARCH_CURRENT' => 'Etsi tästä kansiosta.',
	'PM_SEARCH_CURRENT_EXPLAIN' => 'Kyllä hakee vain tästä kansiosta. Ei-vaihtoehto ulottaa haun kaikkiin kansioihin.',
	'PM_SEARCH_AUTHOR' => 'Etsi lähettäjää tai vastaanottajaa',
	'PM_SEARCH_AUTHOR_EXPLAIN' => 'Etsii saamiesi tai lähettämiesi viestien lähettäjiä ja vastaanottajia. Erottele lähettäjät ja/tai vastaanottajat pilkulla. Jos "Etsi tarkka sanajono" on Ei niin hakua voidaan käyttää osittaisten nimien hakuun. Kyllä asetus "Etsi tarkka sanajono"ssa hakee vain täsmäosumia yhdistettynä lähettäjä ja/tai vastaanottaja-hakuun.',

	'SEARCH_PM_FOLDERS' => 'YV-haku...',

	'UCP_PM_SEARCH' => 'YV-haku',
	'NO_AUTH_PM_SEARCH' => 'Sinulla ei ole oikeuksia tämän hakutoiminnon käyttämiseen',
	'ADDED_PM_SEARCH_PERMISSIONS' => 'Yksityisviestien hakuoikeudet on onnistuneesti lisätty',

));

?>