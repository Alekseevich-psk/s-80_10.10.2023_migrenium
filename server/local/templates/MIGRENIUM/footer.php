<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<footer class="footer">
    <div class="footer__container container">
        <div class="footer__wrapper">
            <div class="footer__inner footer__inner--promomed">
                <a href="https://promomed.ru/" class="footer__link footer__link--promomed" target="_blank">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/logo-promomed.svg" alt="">
                </a>

                <div class="footer__item">
                    <div class="footer__cop">
                        © <?=date('Y');?> | ООО «ПРОМОМЕД ДМ».
                        <br>
                        Все права защищены
                    </div>
                </div>

                <div class="footer__item">
                    <a href="tel:<?=cleanPhone($GLOBALS['phone']);?>" class="footer__link">
                        <?=$GLOBALS['phone'];?>
                    </a>
                </div>

                <div class="footer__item">
                    <div class="footer__address">
                        <?=$GLOBALS['address'];?>
                    </div>
                </div>
            </div>

            <div class="footer__bg">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/product_all.png" alt="">
            </div>

            <div class="footer__inner footer__inner--info">
                <div class="footer__item">
                    <p>*по сравнению с монопрепаратами парацетамола</p>

                    <p>
                        Derry CJ, Derry S, Moore RA. Caffeine as an analgesic adjuvant for acute pain in adults. Cochrane
                        Database Syst Rev. 2014 Dec 11;2014(12):CD009281. doi: 10.1002/14651858.CD009281.pub3. PMID:
                        25502052; PMCID: PMC6485702.
                    </p>

                    <p>
                        Kuntz D, Brossel R. Action antalgique et tolérance clinique de l'association paracétamol 500
                        mg-caféine 50 mg versus paracétamol 400 mg-dextropropoxyphène 30 mg dans les rachialgies
                        [Analgesic
                        effect and clinical tolerability of the combination of paracetamol 500 mg and caffeine 50 mg
                        versus
                        paracetamol 400 mg and dextropropoxyphene 30 mg in back pain]. Presse Med. 1996 Sep
                        7;25(25):1171–4.
                        French. PMID: 8949620
                    </p>
                </div>

                <p class="footer__designer">
                    Дизайн сайта — Текарт.
                </p>
            </div>
        </div>

        <div class="footer__warning">
            Имеются противопоказания. Необходимо проконсультироваться со специалистом.

            <div class="footer__warning-btn"></div>
        </div>
    </div>
</footer>

<div class="confidentiality">
    <div class="confidentiality__body">
        <div class="confidentiality__text">
            Продолжая использовать сайт <b><?=$GLOBALS['domain'];?></b>, вы соглашаетесь на использование файлов cookie.
            <br>Более подробная информация на странице <a href="/politika-konfidentsialnosti/" class="confidentiality__link" target="_blank">Политика конфиденциальности.</a>
        </div>

        <div class="confidentiality__align">
            <button class="confidentiality__button button">Согласен</button>
        </div>
    </div>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(40487780, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40487780" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>