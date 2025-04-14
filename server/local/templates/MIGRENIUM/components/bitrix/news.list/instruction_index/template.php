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
                Инструкция по применению лекарственного препарата Мигрениум
            </h1>

            <div class="articles__wrapper content_flex row">
                <div class="content">
                    <?foreach ($arResult["ITEMS"] as $arItem):?>
                        <h2>
                            <?=$arItem["NAME"];?>
                        </h2>

                        <div class="dev_instruction_text_wrapper">
                            <div id="block_<?=$arItem["ID"];?>" class="dev_instruction_text_anchor"></div>

                            <?=$arItem["TEXT"];?>
                        </div>
                    <?endforeach;?>
                </div>

                <aside>
                    <div class="download">
                        <div>
                            <a href="/upload/imp_migrenium_25.04.2022.pdf" target="_blank">
                                <div class="icon" alt="Скачать инструкцию"></div>

                                <span>Скачать инструкцию</span>
                            </a>
                        </div>
                    </div>

                    <div class="links sticky">
                        <ul>
                            <?foreach ($arResult["ITEMS"] as $arItem):?>
                                <li>
                                    <a href="#block_<?=$arItem["ID"];?>">
                                        <?=$arItem["NAME"];?>
                                    </a>
                                </li>
                            <?endforeach;?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>

<?endif;?>