<? if ($seo_text) { ?>
    <div class="seo-text pt-64">
        <div class="seo-text__wrap flex --align-center --just-space col --12">
            <div class="seo-text__intro --no col --9">
                <h2><b><?=$seo_text['title']?></b></h2>
                <?=$seo_text['intro']?>
            </div>
            <div class="seo-text__full --no col --9" style="display:none;">
                <?=$seo_text['full']?>
            </div>
            <div class="seo-text__show-more-wrap col --2 flex --align-center --just-center">
                <div class="seo-text__show-more btn js-seo-text-toggle --svg__plus"></div>
            </div>
        </div>
    </div>
<? } ?>