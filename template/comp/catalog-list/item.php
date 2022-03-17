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
    };
    $discount = 15;
    $old_price = $item['price'] + (($discount / 100) * $item['price']);

?>
<? if (isset($section['is_used']) && $section['is_used'] == true) { ?>
    <div class="product-item --used js-cart-parent js-fave-parent">
        <input type="hidden" class="js-cart-id js-fave-id" value="<?=$item['id']?>">
        <? if (isset($item['warranty'])) { ?>
            <div class="product-item__sales-tag">Гарантия</div>
        <? } ?>
        <div class="product-item__favor-btn js-fave-add btn --svg__favor <? if($in_fave == true) {?> is-active<?}?>"></div>
        <div class="product-item__cover-carousel">
            <div class="js-swiper__product type-carusel">
                <div class="type-carusel__swiper">
                    <div class="type-carusel__btn --left --svg__carusel-arrow-dark--left swiper-button-prev --product"></div>
                    <div class="swiper-container --product">
                        <div class="swiper-wrapper">
                            <? foreach ($item['img'] as $key => $src) { ?>
                                <? $new_src = str_replace('https://images.ru.prom.st/', 'min-', $src); ?>
                                <div class="swiper-slide">
                                    <a href="<?=$detail_link?>" class="product-item__image-link link">
                                        <picture class="product-item__cover-img lazy">
                                            <source srcset="/template/dist/img/<?=$new_src?>" type="image/webp">
                                            <source srcset="/template/dist/img/<?=$new_src?>" type="image/jpg">
                                        </picture>
                                    </a>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                    <div class="type-carusel__btn --right --svg__carusel-arrow-dark--right swiper-button-next --product"></div>
                </div>
                <div class="type-carusel__pagination">
                    <div class="swiper-pagination --product"></div>
                </div>
            </div>
        </div>
        <div class="product-item__desc flex --direction-column --just-space mt-20">
            <div class="product-item__head">
                <div class="product-item__sub-head flex --align-center --just-space">
                    <div class="product-item__info flex --align-center">
                        <div class="product-item__demo flex --align-center mr-16">
                            <div class="product-item__demo-icon --svg__demo mr-6"></div>
                            <div class="product-item__demo-label p --m">Демо образец</div>
                        </div>
                    </div>
                </div>
                <div class="product-item__name-wrap mt-8">
                    <a href="<?=$detail_link?>" class="product-item__name link"><?=$item['name']?></a>
                </div>
                <div class="product-item__description p --m mt-4"><?= $item['description'] ?></div>
            </div>
            <div class="product-item__bottom mt-12">
                <div class="sale-item__map-btn flex --align-center">
                    <div class="sale-item__map-btn-icon --svg__location mr-12"></div>
                    <div class="sale-item__map-btn-label p --m">Шоу-рум <?= $item['store'] ?></div>
                </div>
                <div class="product-item__price-wrap mt-16">
                    <div class="product-item__price-sub-wrap flex --align-end">
                        <? if ($item['price']) { ?>
                            <div class="product-item__price mr-12"><?=number_format($item['price'], 0, '.', ' ')?> Р</div>
                        <? } ?>
                        <div class="product-item__old-price p --l mb-4"><?= number_format($old_price, 0, '.', ' ') ?> Р</div>
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
<? } else { ?>
    <? if ($_COOKIE['products-view'] && $_COOKIE['products-view'] == 'list' && $carousel !== true ) { ?>
        <div class="product-item --list-view js-cart-parent js-fave-parent">
            <input type="hidden" class="js-cart-id js-fave-id" value="<?=$item['id']?>">
            <? if ($item['marker'] !== null) { ?>
                <div class="product-item__new-tag"><?=$item['marker']?></div>
            <? } ?>
            <? if ($item['sales'] !== null) { ?>
                <div class="product-item__sales-tag">Скидка</div>
            <? } ?>
            <div class="product-item__cover-carousel col --3 mr-24">
                <div class="js-swiper__product type-carusel">
                    <div class="type-carusel__swiper">
                        <div class="type-carusel__btn --left --svg__carusel-arrow-dark--left swiper-button-prev --product"></div>
                        <div class="swiper-container --product">
                            <div class="swiper-wrapper">
                                <? foreach ($item['img'] as $key => $src) { ?>
                                    <? $new_src = str_replace('https://images.ru.prom.st/', 'min-', $src); ?>
                                    <div class="swiper-slide">
                                        <a href="<?=$detail_link?>" class="product-item__image-link link">
                                            <picture class="product-item__cover-img lazy">
                                                <source srcset="/template/dist/img/<?=$new_src?>" type="image/webp">
                                                <source srcset="/template/dist/img/<?=$new_src?>" type="image/jpg">
                                            </picture>
                                        </a>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                        <div class="type-carusel__btn --right --svg__carusel-arrow-dark--right swiper-button-next --product"></div>
                    </div>
                    <div class="type-carusel__pagination">
                        <div class="swiper-pagination --product"></div>
                    </div>
                </div>
            </div>
            <div class="product-item__desc pt-16 pb-32">
                <div class="product-item__head flex --align-center --just-space">
                    <div class="product-item__name-wrap">
                        <a href="<?=$detail_link?>" class="product-item__name link"><?=$item['name']?></a>
                        <div class="product-item__info-wrap flex --align-center mt-8">
                            <div class="product-item__info flex --align-center mr-24">
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
                                    <div id="star2" class="rate__icon"></div>
                                    <div id="star1" class="rate__icon"></div>
                                </div>
                                <div class="rate__count p --m">(0)</div>
                            </div>
                        </div>
                        <div class="product-item__services flex --align-center mt-24">
                            <? if ($item['demo']) { ?>
                                <div class="product-item__demo flex --align-center mr-32">
                                    <div class="product-item__demo-icon --svg__demo mr-6"></div>
                                    <div class="product-item__demo-label --p">Демо образец</div>
                                </div>
                            <? } ?>
                            <div class="product-item__trade flex --align-center mr-32">
                                <div class="product-item__trade-icon --svg__trade mr-6"></div>
                                <div class="product-item__trade-label --p">Трейд-ин</div>
                            </div>
                            <? if ($item['price'] > 20000) { ?>
                                <div class="product-item__credit flex --align-center">
                                    <div class="product-item__credit-icon --svg__credit mr-8"></div>
                                    <div class="product-item__credit-label --p"><b>0/0/12</b> (рассрочка)</div>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                    <div class="product-item__price-wrap">
                        <div class="product-item__price-sub-wrap flex --align-center">
                            <div class="product-item__old-price p --xl mr-16"><?= number_format($old_price, 0, '.', ' ') ?> Р</div>
                            <? if ($item['price']) { ?>
                                <div class="product-item__price"><?=number_format($item['price'], 0, '.', ' ')?> Р</div>
                            <? } ?>
                        </div>
                        <div class="product-item__btns-wrap flex --align-center mt-20">
                            <div class="product-item__favor-btn js-fave-add btn --svg__favor <? if($in_fave == true) {?> is-active<?}?>"></div>
                            <!-- <div class="product-item__close-btn btn" style="display: none"></div> -->
                            <!-- <div class="product-item__compare-btn btn --svg__compare mr-16"></div> -->
                            <? if ($in_cart == true ){ ?>
                                <div class="product-item__add-btn js-cart-add btn --green --svg__cart-add js-cart-removed --id-<?=$item['id']?>"></div>
                            <? } else { ?>
                                <div class="product-item__add-btn js-cart-add btn --fill-1 --svg__cart-add js-cart-removed --id-<?=$item['id']?>"></div>
                            <? } ?>
                        </div>
                    </div>
                </div>
                <div class="product-item__parameters grid --temp-col-2 mt-40">
                    <div class="parameters-items">
                        <div class="parameter-item grid --temp-col-2">
                            <div class="parameter-item__label --p">Материал обшивки:</div>
                            <div class="parameter-item__value --p">Кожа</div>
                        </div>
                        <div class="parameter-item grid --temp-col-2">
                            <div class="parameter-item__label --p">Стиль:</div>
                            <div class="parameter-item__value --p">Классика</div>
                        </div>
                        <div class="parameter-item grid --temp-col-2">
                            <div class="parameter-item__label --p">Тип кресла:</div>
                            <div class="parameter-item__value --p">Массажер</div>
                        </div>
                        <div class="parameter-item grid --temp-col-2">
                            <div class="parameter-item__label --p">Производство:</div>
                            <div class="parameter-item__value --p">Китай</div>
                        </div>
                    </div>
                    <div class="parameters-items">
                        <div class="parameter-item grid --temp-col-2">
                            <div class="parameter-item__label --p">Материал обшивки:</div>
                            <div class="parameter-item__value --p">Кожа</div>
                        </div>
                        <div class="parameter-item grid --temp-col-2">
                            <div class="parameter-item__label --p">Стиль:</div>
                            <div class="parameter-item__value --p">Классика</div>
                        </div>
                        <div class="parameter-item grid --temp-col-2">
                            <div class="parameter-item__label --p">Тип кресла:</div>
                            <div class="parameter-item__value --p">Массажер</div>
                        </div>
                        <div class="parameter-item grid --temp-col-2">
                            <div class="parameter-item__label --p">Производство:</div>
                            <div class="parameter-item__value --p">Китай</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <? } else { ?>
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
                <div class="js-swiper__product type-carusel">
                    <div class="type-carusel__swiper">
                        <div class="type-carusel__btn --left --svg__carusel-arrow-dark--left swiper-button-prev --product"></div>
                        <div class="swiper-container --product">
                            <div class="swiper-wrapper">
                                <? foreach ($item['img'] as $key => $src) { ?>
                                    <? $new_src = str_replace('https://images.ru.prom.st/', 'min-', $src); ?>
                                    <div class="swiper-slide">
                                        <a href="<?=$detail_link?>" class="product-item__image-link link">
                                            <picture class="product-item__cover-img lazy">
                                                <source srcset="/template/dist/img/<?=$new_src?>" type="image/webp">
                                                <source srcset="/template/dist/img/<?=$new_src?>" type="image/jpg">
                                            </picture>
                                        </a>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                        <div class="type-carusel__btn --right --svg__carusel-arrow-dark--right swiper-button-next --product"></div>
                    </div>
                    <div class="type-carusel__pagination">
                        <div class="swiper-pagination --product"></div>
                    </div>
                </div>
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
                        <? if ($item['demo']) { ?>
                            <div class="product-item__demo flex --align-center mr-16">
                                <div class="product-item__demo-icon --svg__demo mr-6"></div>
                                <div class="product-item__demo-label p --m">Демо образец</div>
                            </div>
                        <? } ?>
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
                            <div class="product-item__old-price --p"><?= number_format($old_price, 0, '.', ' ') ?> Р</div>
                        </div>
                        <? if ($item['price'] > 20000) { ?>
                            <div class="product-item__credit flex --align-center">
                                <div class="product-item__credit-icon --svg__credit mr-8"></div>
                                <div class="product-item__credit-label p --m"><b>0/0/12</b> (рассрочка)</div>
                            </div>
                        <? } ?>
                    </div>
                </div>
                <? if ($in_cart == true ){ ?>
                    <div class="product-item__add-btn js-cart-add btn --green --svg__cart-add js-cart-removed --id-<?=$item['id']?>"></div>
                <? } else { ?>
                    <div class="product-item__add-btn js-cart-add btn --fill-1 --svg__cart-add js-cart-removed --id-<?=$item['id']?>"></div>
                <? } ?>
            </div>
        </div>
    <? } ?>
<? } ?>