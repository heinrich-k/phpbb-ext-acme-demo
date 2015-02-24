<?php
/**
*
* @package phpBB Extension - Acme Demo
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
if (!defined('IN_PHPBB'))
{
exit;
}
if (empty($lang) || !is_array($lang))
{
$lang = array();
}
$lang = array_merge($lang, array(
'DEMO_PAGE'	=> 'Demo',
'DEMO_HELLO'	=> 'Hallo %s!',
'DEMO_GOODBYE'	=> 'Auf Wiedersehen %s!',
'ACP_DEMO_TITLE'	=> 'Demo Modul',
'ACP_DEMO'	=> 'Einstellungen',
'ACP_DEMO_GOODBYE'	=> 'Soll &quot;Auf Wiedersehen&quot; sagen?',
'ACP_DEMO_SETTING_SAVED'	=> 'Einstellungen erfolgreich gespeichert!',
));
