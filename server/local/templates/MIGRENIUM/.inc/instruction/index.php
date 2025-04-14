<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
/* Кеширование выключено, т.к. в шаблоне есть компонент Крошек */
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "instruction_index",
    Array(
        "CACHE_TYPE" => "N",

        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "FIELD_CODE" => array("ID", "NAME", "CODE", "SORT", "DETAIL_TEXT", ""),
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "7",
        "IBLOCK_TYPE" => "instruction",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "999",
        "PAGER_TEMPLATE" => "pagination",
		"PARENT_SECTION" => $_REQUEST["SECTION_ID"],
		"PARENT_SECTION_CODE" => $_REQUEST["SECTION_CODE"],
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(""),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "N",
        "SHOW_404" => "Y",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>