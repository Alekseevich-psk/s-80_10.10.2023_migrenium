<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["SECTIONS"])):?>

    <?foreach ($arResult["SECTIONS"] as $arSection):?>

        <?if ($arSection["ID"] == 6):?>

            <section class="main" data-section-id="<?=$arSection["ID"];?>">

                <?if ($arSection["VIDEOS"] && $arSection["VIDEOS_M"]):?>
                    <div class="main__video">
                        <div class="main__video-desktop">
                            <video id="video-desktop" playsinline muted pip="false">
                                <?foreach ($arSection["VIDEOS"] as $video):?>
                                    <source src="<?=$video["PATH"];?>" type="<?=$video["TYPE"];?>">
                                <?endforeach;?>

                                <p>Видео не проигрывается, вероятно ваш браузер не поддерживает HTML5-видео</p>
                            </video>
                        </div>

                        <div class="main__video-mobile">
                            <video id="video-mobile" playsinline muted pip="false">
                                <?foreach ($arSection["VIDEOS_M"] as $video):?>
                                    <source src="<?=$video["PATH"];?>" type="<?=$video["TYPE"];?>">
                                <?endforeach;?>

                                <p>Видео не проигрывается, вероятно ваш браузер не поддерживает HTML5-видео</p>
                            </video>
                        </div>
                    </div>
                <?endif;?>

                <?if ($arSection["SLIDER"]):?>
                    <div class="main__container">
                        <div class="main__wrapper">
                            <div class="main__inner">
                                <div class="main__slider">
                                    <?foreach ($arSection["SLIDER"] as $slide):?>
                                        <div class="main__slide">
                                            <div class="main__title">
                                                <?=$slide["TEXT"];?>
                                            </div>
                                        </div>
                                    <?endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?endif;?>
            </section>

        <?endif;?>


        <?if ($arSection["ID"] == 1):?>

            <section class="about-product" data-section-id="<?=$arSection["ID"];?>">
                <div class="about-product__container container">
                    <div class="about-product__sub-wrapper">
                        <div class="about-product__s-title s-title">
                            <?=$arSection["TEXT"];?>
                        </div>

                        <div class="about-product__btn">
                            <a href="/stati/" class="about-product__button button">
                                Узнать подробнее
                            </a>
                        </div>
                    </div>

                    <div class="about-product__wrapper">
                        <div class="about-product__inner about-product__inner--picture">
                            <div class="about-product__picture">
                                <img src="<?=$arSection["IMG"];?>" alt="<?=htmlspecialcharsEx($arSection["NAME"]);?>">
                            </div>
                        </div>

                        <?if ($arSection["ITEMS"]):?>
                            <div class="about-product__inner about-product__inner--text">
                                <ul class="about-product__list">
                                    <?foreach ($arSection["ITEMS"] as $arItem):?>
                                        <li class="about-product__item">
                                            <?=$arItem["ANNOTATION"];?>
                                        </li>
                                    <?endforeach;?>
                                </ul>
                            </div>
                        <?endif;?>
                    </div>
                </div>
            </section>

        <?endif;?>


        <?if ($arSection["ID"] == 2):?>

            <section class="price" data-section-id="<?=$arSection["ID"];?>">
                <div class="price__container container">
                    <div class="price__sub-wrapper">
                        <div class="price__s-title s-title">
                            <div class="s-title__logo"></div>

                            <span>
                                <?=$arSection["TEXT"];?>
                            </span>
                        </div>

                        <div class="price__inner">
                            <a href="#buy" class="price__button button">
                                Узнать цену
                            </a>

                            <div class="price__sl-arrows sl-arrows">
                                <div class="sl-arrows__arrow sl-arrows__arrow--prev"></div>

                                <div class="sl-arrows__arrow sl-arrows__arrow--next"></div>
                            </div>
                        </div>
                    </div>

                    <?if ($arSection["ITEMS"]):?>
                        <div class="price__slider swiper-container">
                            <div class="price__wrapper swiper-wrapper">
                                <?foreach ($arSection["ITEMS"] as $arItem):?>
                                    <div class="price__slide swiper-slide">
                                        <div class="price__picture">
                                            <img src="<?=$arItem["IMG"];?>" alt="<?=htmlspecialcharsEx($arItem["NAME"]);?>">
                                        </div>

                                        <div class="price__sub-title">
                                            <?=$arItem["NAME"];?>
                                        </div>

                                        <div class="price__content">
                                            <?=$arItem["ANNOTATION"];?>
                                        </div>
                                    </div>
                                <?endforeach;?>
                            </div>
                        </div>
                    <?endif;?>
                </div>
            </section>

        <?endif;?>


        <?if ($arSection["ID"] == 3):?>

            <section class="info" data-section-id="<?=$arSection["ID"];?>">
                <div class="info__container container">
                    <div class="info__sub-wrapper">
                        <div class="info__s-title s-title">
                            <div class="s-title__logo"></div>

                            <span>
                                <?=$arSection["TEXT"];?>
                            </span>
                        </div>

                        <div class="info__sl-arrows sl-arrows">
                            <div class="sl-arrows__arrow sl-arrows__arrow--prev"></div>

                            <div class="sl-arrows__arrow sl-arrows__arrow--next"></div>
                        </div>
                    </div>

                    <?if ($arSection["ARTICLES"]):?>
                        <div class="info__slider swiper-container">
                            <div class="info__wrapper swiper-wrapper">
                                <?foreach ($arSection["ARTICLES"] as $arItem):?>
                                    <div class="info__slide swiper-slide">
                                        <div class="info__picture">
                                            <img src="<?=$arItem["IMG"];?>" alt="<?=htmlspecialcharsEx($arItem["NAME"]);?>">
                                        </div>

                                        <div class="info__description">
                                            <div class="info__description-def">
                                                <?=$arItem["NAME"];?>
                                            </div>

                                            <div class="info__description-active">
                                                <?=$arItem["TEXT"];?>
                                            </div>
                                        </div>
                                    </div>
                                <?endforeach;?>
                            </div>
                        </div>
                    <?endif;?>
                </div>
            </section>

            <?if ($arSection["ITEMS"]):?>
                <section class="application" id="about" data-section-id="<?=$arSection["ID"];?>">
                    <div class="application__container container">
                        <div class="application__wrapper">
                            <?foreach ($arSection["ITEMS"] as $key => $arItem):?>
                                <div class="application__inner <?if ($key == 0):?> application__inner--desc <?else:?> application__inner--structure <?endif;?>">
                                    <div class="application__title">
                                        <?=$arItem["NAME"];?>
                                    </div>

                                    <div class="application__content">
                                        <div class="application__sub-title">
                                            <?=$arItem["ANNOTATION"];?>
                                        </div>

                                        <div class="application__description">
                                            <?=$arItem["TEXT"];?>
                                        </div>
                                    </div>
                                </div>
                            <?endforeach;?>
                        </div>
                    </div>
                </section>
            <?endif;?>

        <?endif;?>


        <?if ($arSection["ID"] == 4 && $arSection["ITEMS"]):?>

            <section class="reviews" data-section-id="<?=$arSection["ID"];?>">
                <div class="reviews__container container">
                    <div class="reviews__sub-wrapper">
                        <h2 class="reviews__s-title s-title">
                            <?=$arSection["TEXT"];?>
                        </h2>

                        <div class="reviews__sl-arrows sl-arrows">
                            <div class="sl-arrows__arrow sl-arrows__arrow--prev"></div>

                            <div class="sl-arrows__arrow sl-arrows__arrow--next"></div>
                        </div>
                    </div>

                    <div class="reviews__slider swiper-container">
                        <div class="reviews__wrapper swiper-wrapper">
                            <?foreach ($arSection["ITEMS"] as $arItem):?>
                                <div class="reviews__slide swiper-slide">
                                    <div class="reviews__text">
                                        <?=$arItem["ANNOTATION"];?>
                                    </div>

                                    <div class="reviews__author">
                                        <?=$arItem["NAME"];?>
                                    </div>

                                    <div class="reviews__ico">
                                        <img src="<?=$arItem["ICON"];?>" alt="<?=htmlspecialcharsEx($arItem["NAME"]);?>">
                                    </div>
                                </div>
                            <?endforeach;?>
                        </div>
                    </div>
                </div>
            </section>

        <?endif;?>


        <?if ($arSection["ID"] == 5):?>

            <section class="buy" id="buy" data-section-id="<?=$arSection["ID"];?>">
                <div class="buy__container container">
                    <div class="buy__sub-wrapper">
                        <h2 class="buy__s-title s-title">
                            <?=$arSection["NAME"];?>
                        </h2>

                        <div class="buy__sl-arrows sl-arrows">
                            <div class="sl-arrows__arrow sl-arrows__arrow--prev"></div>

                            <div class="sl-arrows__arrow sl-arrows__arrow--next"></div>
                        </div>
                    </div>

                    <div class="buy__description">
                        <?=$arSection["TEXT"];?>
                    </div>

                    <?if ($arSection["SHOPS"]):?>
                        <div class="buy__slider">
                            <div class="buy__wrapper">
                                <?foreach ($arSection["SHOPS"] as $arItem):?>
                                    <a href="<?=$arItem["LINK"];?>" class="buy__slide" target="_blank">
                                        <img src="<?=$arItem["LOGO"];?>" alt="<?=htmlspecialcharsEx($arItem["NAME"]);?>">
                                    </a>
                                <?endforeach;?>
                            </div>
                        </div>
                    <?endif;?>
                </div>
            </section>

        <?endif;?>

    <?endforeach;?>

<?endif;?>