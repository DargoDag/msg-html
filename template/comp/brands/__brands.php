<?php 
    $top = [];
    $other = [];
    foreach ($brands as $key => $el) {
        if ($el['name'] == 'Yamaguchi' || $el['name'] == 'Casada') {
            array_push($top, $el);
        } else {
            array_push($other, $el);
        }
    }
?>
<div class="brands-items grid --temp-col-4 --gap-24">
    <? foreach ($top as $key => $item) { ?>
        <a href="/brands/<?=$item['name']?>/" class="brand-item link">
            <picture class="brand-item__thumb lazy">
                <source srcset="/template/dist/img/<?=$item['name']?>.webp" type="image/webp">
                <source srcset="/template/dist/img/<?=$item['name']?>.jpg" type="image/jpg">
            </picture>
            <div class="brand-item__desc h5">Показать <span><?=$item['count']?> товаров</span></div>
        </a>
    <? } ?>
</div>
<div class="brands-items grid --temp-col-6 --gap-24 mt-24">
    <? foreach ($other as $key => $item) { ?>
        <a href="/brands/<?=$item['name']?>/" class="brand-item link --min">
            <picture class="brand-item__thumb lazy">
                <source srcset="/template/dist/img/<?=$item['name']?>.webp" type="image/webp">
                <source srcset="/template/dist/img/<?=$item['name']?>.jpg" type="image/jpg">
            </picture>
            <div class="brand-item__desc h5">Показать <span><?=$item['count']?> товаров</span></div>
        </a>
    <? } ?>   
</div>