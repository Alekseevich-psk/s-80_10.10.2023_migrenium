<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Статьи");

$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/.inc/stati/index.php",
    Array(),
    Array(
        "SHOW_BORDER" => false,
        "MODE" => "php",
    )
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>