<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Текстовая страница");

echo '
<section class="document">
    <div class="document__container container">
        <div class="document__content content">
';
?>

Раздел наполняется.

<?
echo '
		</div>
	</div>
</section>
';

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>