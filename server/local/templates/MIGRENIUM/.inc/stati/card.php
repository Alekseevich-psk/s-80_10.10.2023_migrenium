<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="articles__card card <?=$class;?>">
    <div class="card__body">
        <div class="card__date">
            <?=$arItem["DATE"];?>
        </div>

        <a href="<?=$arItem["LINK"];?>" class="card__title">
            <?=$arItem["NAME"];?>
        </a>

        <div class="card__description">
            <?=$arItem["ANNOTATION"];?>
        </div>

        <?if ($arItem["TAGS"]):
            $sectionUrl = $arItem["~LIST_PAGE_URL"];
            $sectionTag = htmlspecialcharsEx($_GET['tag']);
        ?>
            <div class="card__categories categories">
                <ul class="categories__list categories__list--no-images">
                    <?foreach ($arItem["TAGS"] as $arTag):?>
                        <li class="categories__item <?if ($arTag["CODE"] == $sectionTag):?> active
                            <?endif;?>">
                            <a href="<?=$sectionUrl;?>?tag=<?=$arTag["CODE"];?>" class="categories__link">
                                <?=$arTag["NAME"];?>
                            </a>
                        </li>
                    <?endforeach;?>
                </ul>
            </div>
        <?endif;?>
    </div>
</div>