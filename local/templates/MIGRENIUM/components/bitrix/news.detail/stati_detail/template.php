<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?if ($arResult):?>
    <section class="banner">
        <div class="banner__picture">
            <img src="<?=$arResult["BG"];?>" alt="<?=$arResult["NAME"];?>">
        </div>
    </section>

    <section class="article">
        <div class="article__container container">
            <div class="article__date">
                <?=$arResult["DATE"];?>
            </div>

            <div class="article__wrapper">
                <div class="article__inner article__inner--title">
                    <h1 class="article__s-title s-title">
                        <?=$arResult["NAME"];?>
                    </h1>
                </div>

                <?if ($arResult["TAGS"]):
                    $sectionUrl = $arResult["~LIST_PAGE_URL"];
                    $sectionTag = htmlspecialcharsEx($_GET['tag']);
                ?>
                    <div class="article__inner article__inner--categories">
                        <div class="article__categories categories">
                            <ul class="categories__list categories__list--no-images">
                                <?foreach ($arResult["TAGS"] as $arTag):?>
                                    <li class="categories__item <?if ($arTag["CODE"] == $sectionTag):?> active <?endif;?>">
                                        <a href="<?=$sectionUrl;?>?tag=<?=$arTag["CODE"];?>" class="categories__link categories__link--migraine">
                                            <?=$arTag["NAME"];?>
                                        </a>
                                    </li>
                                <?endforeach;?>
                            </ul>
                        </div>
                    </div>
                <?endif;?>
            </div>

            <div class="article__content content">
                <?=$arResult["TEXT"];?>
            </div>
        </div>
    </section>
<?endif;?>