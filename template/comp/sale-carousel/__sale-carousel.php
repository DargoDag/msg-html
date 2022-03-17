<div class="sale-carousel">
    <div class="js-swiper__sale type-carusel">
        <div class="type-carusel__swiper">
            <div class="type-carusel__btn --left swiper-button-prev"></div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <? foreach ($ndx_sales as $key => $item) { ?>
                        <?php
                                $section_code = strtolower(str_replace('https://tiu.ru/', '', $item['category_link']));
                                $detail_link = '/catalog/'.$section_code.'/'.$item['code'].'/';
                                $in_cart = false;
                                $in_fave = false;
                                foreach ($cart as $key => $el_cart) {
                                    if ($item['id'] == $el_cart['id']) {
                                        $in_cart = true;
                                    }
                                }
                                foreach ($fave as $key => $f) {
                                    if ($item['id'] == $f) {
                                        $in_fave = true;
                                    }
                                }
                                $discount = 15;
                                if ($item['id'] == 489617829) {
                                    $discount = 30000;
                                    $old_price = $item['price'] + $discount;
                                } else {
                                }
                                if ($item['id'] == 507149744) {
                                    $discount = 30000;
                                    $old_price = $item['price'] + $discount;
                                } else {
                                }
                                if ($item['id'] == 507149762) {
                                    $discount = 30000;
                                    $old_price = $item['price'] + $discount;
                                } else {
                                }
                                // $old_price = $item['price'] + (($discount / 100) * $item['price']);
                            ?>
                        <div class="swiper-slide">
                            <div class="product-item js-cart-parent js-fave-parent">
                                <input type="hidden" class="js-cart-id js-fave-id" value="<?=$item['id']?>">
                                <? if ($item['marker'] !== null) { ?>
                                    <div class="product-item__new-tag"><?=$item['marker']?></div>
                                <? } ?>
                                <? if ($item['sales'] !== null) { ?>
                                    <div class="product-item__sales-tag">Скидка</div>
                                <? } ?>
                                
                                <div class="product-item__sale-tag"><span><?=$discount?>р</span>ВЫГОДА</div>
                                <div class="product-item__cover">
                                    <? $new_src = str_replace('https://images.ru.prom.st/', 'min-', $item['img'][0]); ?>
                                    <a href="<?=$detail_link?>" class="product-item__image-link link">
                                        <picture class="product-item__cover-img lazy">
                                            <source srcset="/template/dist/img/<?=$new_src?>" type="image/webp">
                                            <source srcset="/template/dist/img/<?=$new_src?>" type="image/jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="product-item__desc flex --direction-column --align-center mt-16">
                                    <div class="product-item__articul p --m">Арт: <?=$item['article']?></div>
                                     
                                        <a href="<?=$detail_link?>" class="product-item__name link"><?=$item['name']?></a>
                                     
                                    <div class="product-item__price-sub-wrap flex --align-center">
                                        <? if ($item['price']) { ?>
                                            <div class="product-item__price mr-12"><?=number_format($item['price'], 0, '.', ' ')?> Р</div>
                                        <? } ?>
                                        <div class="product-item__old-price --p"><?= number_format($old_price, 0, '.', ' ') ?></div>
                                    </div>
                                    <div class="product-item__timer-wrap mt-16">
                                        <div class="sale-item__label p --m">До окончания акции осталось:</div>
                                        <div class="sale-item__counter-wrap flex --align-center js-counter mt-8" data-date="2021-12-31"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>     
                </div>
            </div>
            <div class="type-carusel__btn --right swiper-button-next"></div>
        </div>
        <div class="type-carusel__pagination flex --just-center mt-12">
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>