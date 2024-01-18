<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");

$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/.inc/index/index.php",
    Array(),
    Array(
        "SHOW_BORDER" => false,
        "MODE" => "php",
    )
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>