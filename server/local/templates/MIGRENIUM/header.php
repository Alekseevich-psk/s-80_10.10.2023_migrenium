<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$rsSites = CSite::GetByID(SITE_ID);
$arSite = $rsSites->Fetch();

$GLOBALS['sitename'] = $arSite['NAME'];
?>
<!doctype html>
<html lang="<?=$arSite['LANGUAGE_ID']?>">

<head>
    <?
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/dev.css');
    // JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/libs/libs.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/scripts.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/dev.js');
    //STRINGS
    Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge'>");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>");
    Asset::getInstance()->addString("<meta name='format-detection' content='telephone=no'>");
    Asset::getInstance()->addString("<meta name='SKYPE_TOOLBAR' content='SKYPE_TOOLBAR_PARSER_COMPATIBLE'>");
    Asset::getInstance()->addString("<link rel='apple-touch-icon' sizes='180x180' href='" . SITE_TEMPLATE_PATH . "/images/favicon/apple-touch-icon.png'>");
    Asset::getInstance()->addString("<link rel='icon' type='image/png' sizes='32x32' href='" . SITE_TEMPLATE_PATH . "/images/favicon/favicon-32x32.png'>");
    Asset::getInstance()->addString("<link rel='icon' type='image/png' sizes='16x16' href='" . SITE_TEMPLATE_PATH . "/images/favicon/favicon-16x16.png'>");
    Asset::getInstance()->addString("<link rel='manifest' href='" . SITE_TEMPLATE_PATH . "/images/favicon/site.webmanifest'>");
    Asset::getInstance()->addString("<meta name='msapplication-TileColor' content='#da532c'>");
    Asset::getInstance()->addString("<meta name='theme-color' content='#ffffff'>");
    ?>

    <title>
        <?$APPLICATION->ShowTitle()?> | <?=$GLOBALS['sitename'];?>
    </title>
</head>

<body>
    <?$APPLICATION->ShowPanel();?>

    <div class="preloader">
        <div class="preloader__overlay">
            <div class="preloader__element"></div>
        </div>
    </div>

    <div class="anim-bg">
        <div class="anim-bg__element"></div>
    </div>

    <header class="header" <?if ($APPLICATION->showPanelWasInvoked):?> style="position: relative; z-index: 0;" <?endif;?>>
        <?if ($APPLICATION->GetCurPage() == "/" || ((strpos($APPLICATION->GetCurPage(), "/stati/") !== false) && $APPLICATION->GetCurPage() != "/stati/")):?>
            <!-- div class="header__height"></div -->
        <?else:?>
            <div class="header__height"></div>
        <?endif;?>

        <div class="header__body">
            <div class="header__container">
                <div class="header__wrapper">
                    <div class="header__inner header__inner--logo">
                        <a href="/" class="header__logo logo"></a>
                    </div>

                    <div class="header__inner header__inner--nav">
                        <?$APPLICATION->IncludeComponent("bitrix:menu",
                            "main_menu",
                            Array(
                                "ROOT_MENU_TYPE" => "main",
                                "CHILD_MENU_TYPE" => "inner",
                                "ALLOW_MULTI_SELECT" => "N",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "USE_EXT" => "N",
                            ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </header>