<div class="breadcrumbs <?= $modifier ?> mt-16">
    <div class="center-wrap">
        <ul class="breadcrumbs__items flex --align-center">
            <li class="breadcrumbs__item --home">
                <a href="/" class="breadcrumbs__link --svg__home"></a>
            </li>
            <? foreach ($breadcrumbs as $key => $item) { ?>
                <li class="breadcrumbs__devider --svg__arrow-90"></li>
                <li class="breadcrumbs__item">
                    <? if ($item['link'] !== null) { ?>
                        <a href="<?=$item['link']?>" class="breadcrumbs__link p --m"><?=$item['name']?></a>
                    <? } else {?>
                        <span class="breadcrumbs__active p --m"><?=$item['name']?></span>
                    <? } ?>
                </li>
            <? } ?>
        </ul>
    </div>
</div>