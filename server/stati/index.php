<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Статьи");
$APPLICATION->SetPageProperty("title", "📰 Статьи и факты о разных видах боли, что важно и полезно знать");
$APPLICATION->SetPageProperty("description", "Не стоит терпеть боль. Получите ответы на свои вопросы: Что такое боль и что от нее помогает? Причины ноющей боли, о чем она говорит и как от нее избавиться? Что вызывает сильную боль и как ее облегчить?");

$pagination_page = $_REQUEST['PAGEN_1'];
if (!empty($pagination_page)) {
    global $APPLICATION;
    $APPLICATION->AddHeadString('<link href="https://' . $_SERVER['HTTP_HOST'] . $APPLICATION->sDirPath . '" rel="canonical" />', true);

    $APPLICATION->SetPageProperty("title", "Статьи о разных видах боли - страница {$pagination_page}");
    $APPLICATION->SetPageProperty("description", "Ответы на свои вопросы: Что такое боль и что ее вызывает? Причины боли, о чем она говорит и как от нее избавиться? Как облегчить сильную боль?");
}

$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/.inc/stati/index.php",
    Array(),
    Array(
        "SHOW_BORDER" => false,
        "MODE" => "php",
    )
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>