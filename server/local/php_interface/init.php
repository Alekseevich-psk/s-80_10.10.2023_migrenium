<?
// Глобальные настройки
$GLOBALS['dev'] = $GLOBALS['DEV'] = 'style="background: rgba(255, 0, 0, .2); padding: 10px !important;"';

$GLOBALS['site_url'] = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

$GLOBALS['domain'] = $_SERVER['SERVER_NAME'];

/* Имя сайта задано в header.php
$GLOBALS['sitename'] = $arSite["NAME"];
*/

$GLOBALS['email_to'] = \COption::GetOptionString("askaron.settings", "UF_EMAIL_TO");

$GLOBALS['phone'] = \COption::GetOptionString("askaron.settings", "UF_PHONE");
$GLOBALS['address'] = $GLOBALS['address_showroom'] = \COption::GetOptionString("askaron.settings", "UF_ADDRESS");

// Доп. функции
function cleanPhone($phone = '') {
    return preg_replace('![^0-9]+!', '', $phone);
}

?>