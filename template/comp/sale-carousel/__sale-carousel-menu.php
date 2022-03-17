<div class="sale-carousel --menu">
    <div class="js-swiper__sale type-carusel">
        <div class="type-carusel__swiper">
            <div class="type-carusel__btn --left swiper-button-prev"></div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <? foreach ($carusel as $key => $item) { ?>
                        <div class="swiper-slide">
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
                            ?>
                            <div class="product-item js-cart-parent js-fave-parent">
                                <input type="hidden" class="js-cart-id js-fave-id" value="<?=$item['id']?>">
                                <? if ($item['marker'] !== null) { ?>
                                    <div class="product-item__new-tag"><?=$item['marker']?></div>
                                <? } ?>
                                <? if ($item['sales'] !== null) { ?>
                                    <div class="product-item__sales-tag">Скидка</div>
                                <? } ?>
                                <!-- <div class="product-item__close-btn btn" style="display: none"></div> -->
                                <!-- <div class="product-item__compare-btn btn --svg__compare"></div> -->
                                <div class="product-item__favor-btn js-fave-add btn --svg__favor <? if($in_fave == true) {?> is-active<?}?>"></div>
                                <div class="product-item__cover-carousel">
                                    <? $new_src = str_replace('https://images.ru.prom.st/', 'min-', $item['img'][0]); ?>
                                    <a href="<?=$detail_link?>" class="product-item__image-link link">
                                        <picture class="product-item__cover-img lazy">
                                            <source srcset="/template/dist/img/<?=$new_src?>" type="image/webp">
                                            <source srcset="/template/dist/img/<?=$new_src?>" type="image/jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="product-item__desc flex --direction-column --just-space mt-20">
                                    <div class="product-item__head">
                                        <div class="product-item__sub-head flex --align-center --just-space">
                                            <div class="product-item__info flex --align-center">
                                                <div class="product-item__articul mr-14 p --m">Арт: <?=$item['article']?></div>
                                                <? if ($item['in_stock'] == '+') { ?>
                                                    <div class="product-item__availability p --m">В наличии</div>
                                                <? } ?>
                                            </div>
                                            <div class="product-item__rating flex">
                                                <div class="rate flex mr-8">
                                                    <div id="star5" class="rate__icon is-active"></div>
                                                    <div id="star4" class="rate__icon is-active"></div>
                                                    <div id="star3" class="rate__icon is-active"></div>
                                                    <div id="star2" class="rate__icon is-active"></div>
                                                    <div id="star1" class="rate__icon"></div>
                                                </div>
                                                <div class="rate__count p --m">(0)</div>
                                            </div>
                                        </div>
                                        <div class="product-item__name-wrap mt-8">
                                            <a href="<?=$detail_link?>" class="product-item__name link"><?=$item['name']?></a>
                                        </div>
                                    </div>
                                    <div class="product-item__bottom">
                                        <div class="product-item__services flex --align-center mt-4">
                                            <div class="product-item__demo flex --align-center mr-16">
                                                <div class="product-item__demo-icon --svg__demo mr-6"></div>
                                                <div class="product-item__demo-label p --m">Демо образец</div>
                                            </div>
                                            <div class="product-item__trade flex --align-center">
                                                <div class="product-item__trade-icon --svg__trade mr-6"></div>
                                                <div class="product-item__trade-label p --m">Трейд-ин</div>
                                            </div>
                                        </div>
                                        <div class="product-item__price-wrap mt-12">
                                            <div class="product-item__price-sub-wrap flex --align-center">
                                                <? if ($item['price']) { ?>
                                                    <div class="product-item__price mr-12"><?=number_format($item['price'], 0, '.', ' ')?> Р</div>
                                                <? } ?>
                                                <div class="product-item__old-price --p">720 000 Р</div>
                                            </div>
                                            <div class="product-item__credit flex --align-center">
                                                <div class="product-item__credit-icon --svg__credit mr-8"></div>
                                                <div class="product-item__credit-label p --m"><b>0/0/12</b> (рассрочка)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <? if ($in_cart == true ){ ?>
                                        <div class="product-item__add-btn js-cart-add btn --green --svg__cart-add js-cart-removed --id-<?=$item['id']?>"></div>
                                    <? } else { ?>
                                        <div class="product-item__add-btn js-cart-add btn --fill-1 --svg__cart-add js-cart-removed --id-<?=$item['id']?>"></div>
                                    <? } ?>
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