<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
// Получаем все теги для статей ("IBLOCK_ID" = 5)
$obArticles = CIBlockElement::GetList(
    Array("SORT" => "ASC"),
    Array("IBLOCK_ID" => 5),
    false,
    false,
    Array("ID", "NAME", "CODE", "PROPERTY_TAG")
);
while ($arArticle = $obArticles->GetNext()) {
    if ($arArticle["PROPERTY_TAG_VALUE"]) {
        $arArticleTags[] = $arArticle["PROPERTY_TAG_VALUE"];
    }
}

foreach ($arArticleTags as $arArticleTag) {
    $obTags = CIBlockElement::GetList(
        Array("SORT" => "ASC"),
        Array("IBLOCK_ID" => 6, "ID" => $arArticleTag),
        false,
        false,
        Array("ID", "NAME", "CODE", "PROPERTY_ICON")
    );

    while ($arTag = $obTags->GetNext()) {
        $arTags[$arTag["ID"]]["NAME"] = htmlspecialcharsEx($arTag["NAME"]);
        $arTags[$arTag["ID"]]["CODE"] = $arTag["ID"];
        $arTags[$arTag["ID"]]["ICON"] = CFile::GetPath($arTag["PROPERTY_ICON_VALUE"]);
    }
}
$arTags = array_unique($arTags, SORT_REGULAR);
?>

<?if ($arTags):
    $sectionUrl = $APPLICATION->GetCurPage();
    $sectionTag = htmlspecialcharsEx($_GET['tag']);
?>
    <div class="articles__categories categories">
        <ul class="categories__list">
            <li class="categories__item <?if (empty($sectionTag)):?> active <?endif;?>">
                <a href="<?=$sectionUrl;?>" class="categories__link categories__link--articles">
                    <span>
                        Все статьи
                    </span>

                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/ico-articles.svg" alt="Все статьи">
                </a>
            </li>

            <?foreach ($arTags as $arTag):?>
                <li class="categories__item <?if ($arTag["CODE"] == $sectionTag):?> active <?endif;?>">
                    <a href="<?=$sectionUrl;?>?tag=<?=$arTag["CODE"];?>" class="categories__link categories__link--migraine">
                        <span>
                            <?=$arTag["NAME"];?>
                        </span>

                        <img src="<?=$arTag["ICON"];?>" alt="<?=$arTag["NAME"];?>">
                    </a>
                </li>
            <?endforeach;?>
        </ul>
    </div>
<?endif;?>