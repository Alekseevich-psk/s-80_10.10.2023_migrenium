<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["ITEMS"])):?>

    <section class="article-slider">
        <div class="article-slider__container container">
            <div class="article-slider__sub-wrapper">
                <h2 class="article-slider__s-title s-title">
                    Другие статьи
                </h2>

                <div class="article-slider__sl-arrows sl-arrows">
                    <div class="sl-arrows__arrow sl-arrows__arrow--prev"></div>

                    <div class="sl-arrows__arrow sl-arrows__arrow--next"></div>
                </div>
            </div>

            <div class="article-slider__slider swiper-slider">
                <div class="article-slider__wrapper swiper-wrapper">
                    <?
                    foreach ($arResult["ITEMS"] as $arItem) {
                        $APPLICATION->IncludeFile(
                            SITE_TEMPLATE_PATH . "/.inc/stati/card.php",
                            Array(
                                "class" => "swiper-slide",
                                "arItem" => $arItem,
                            ),
                            Array(
                                "SHOW_BORDER" => false,
                                "MODE" => "php",
                            )
                        );
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

<?endif;?>