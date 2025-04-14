<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH."/.inc/stati/detail.php",
    Array(),
    Array(
        "SHOW_BORDER" => false,
        "MODE" => "php",
    )
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>