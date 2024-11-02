<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["ITEMS"])):?>

    <section class="articles">
        <div class="articles__container container">
            <?
            $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . "/.inc/breadcrumbs.php",
                Array(),
                Array(
                    "SHOW_BORDER" => false,
                    "MODE" => "php",
                )
            );
            ?>

            <h1 class="articles__s-title s-title">
                Статьи
            </h1>

            <?
            $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . "/.inc/tags.php",
                Array(),
                Array(
                    "SHOW_BORDER" => false,
                    "MODE" => "php",
                )
            );
            ?>

            <div class="articles__wrapper">
                <?
                foreach ($arResult["ITEMS"] as $arItem) {
                    $APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . "/.inc/stati/card.php",
                        Array(
                            "arItem" => $arItem,
                        ),
                        Array(
                            "SHOW_BORDER" => false,
                            "MODE" => "php",
                        )
                    );
                }
                ?>

                <?=$arResult["NAV_STRING"];?>
            </div>
        </div>
    </section>

<?endif;?>