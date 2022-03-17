<?php 
    $item = $product;
    $in_fave = false;
    $in_cart = false;
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
    $installment  = $item['price'] / 12;
    $trade_in  = (($item['price'] / 100) * 30)
?>
<div class="promo js-cart-parent js-fave-parent">
    <input type="hidden" class="js-cart-id js-fave-id" value="<?=$item['id']?>">
    <div class="product-item --list-view --just-space --align-stretch">
        <? if ($item['marker'] !== null) { ?>
            <div class="product-item__new-tag"><?=$item['marker']?></div>
        <? } ?>
        <? if ($item['sales'] !== null) { ?>
            <div class="product-item__sales-tag">Акция</div>
        <? } ?>
        <div class="product-item__cover-carousel col --6">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2" >
                <div class="type-carusel__btn --left --svg__carusel-arrow-dark--left swiper-button-prev"></div>
                <div class="swiper-wrapper">
                    <? foreach ($item['img'] as $key => $src) { ?>
                        <? $new_src = str_replace('https://images.ru.prom.st/', '', $src); ?>
                        <div class="swiper-slide">
                            <div class="product-item__full">
                                <picture class="product-item__cover-img lazy">
                                    <source srcset="/template/dist/img/<?=$new_src?>" type="image/webp">
                                    <source srcset="/template/dist/img/<?=$new_src?>" type="image/jpg">
                                </picture>
                            </div>
                        </div>
                    <? } ?>
                </div>
                <div class="type-carusel__btn --right --svg__carusel-arrow-dark--right swiper-button-next"></div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <? foreach ($item['img'] as $key => $src) { ?>
                        <? $new_src = str_replace('https://images.ru.prom.st/', '', $src); ?>
                        <div class="swiper-slide">
                            <div class="product-item__tumb">
                                <picture class="product-item__cover-img lazy">
                                    <source srcset="/template/dist/img/<?=$new_src?>" type="image/webp">
                                    <source srcset="/template/dist/img/<?=$new_src?>" type="image/jpg">
                                </picture>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
        <? if (isset($item['is_used']) && $item['is_used'] == true) { ?>
            <div class="product-item__desc --used flex --direction-column --just-space col --6 pl-40">
                <div class="product-item__info">
                    <div class="product-item__status-wrap flex --align-center">
                        <? if ($item['in_stock'] == '+') { ?>
                            <div class="product-item__availability --p mr-24">В наличии</div>
                        <? } ?>
                        <div class="product-item__demo flex --align-center">
                            <div class="product-item__demo-icon --svg__demo mr-8"></div>
                            <div class="product-item__demo-label --p">Демо образец</div>
                        </div>
                    </div>
                    <h1 class="product-item__name mt-12"><?=$item['name']?></h1>
                    <div class="product-item__info-wrap flex --align-center mt-12">
                        <div class="product-item__articul --p">Арт: <?=$item['article']?></div>
                    </div>
                    <div class="product-item__color-pick mt-32">
                        <div class="color-pick__wrap flex --align-center">
                            <div class="color-pick__label --p mr-32">Цвет:</div>
                            <div class="color-pick__items flex">
                                <? foreach ($item['props'] as $key => $prop) { ?>  
                                    <? 
                                        if ($prop['name'] == 'Цвет корпуса' || $prop['name'] == 'Цвет') { 
                                            if ($prop['value'] == 'Черный') { $color = '#222';}
                                            if ($prop['value'] == 'Белый') { $color = '#FFF';}
                                            if ($prop['value'] == 'Бежевый') { $color = '#D0C8BE';}
                                            if ($prop['value'] == 'Розовый') { $color = '#DD0CBC';}
                                            if ($prop['value'] == 'Красный') { $color = '#E50005';}
                                            if ($prop['value'] == 'Серебристый') { $color = '#E5E5E5';}
                                            if ($prop['value'] == 'Коричневый') { $color = '#564043';}
                                    ?>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="<?=$prop['value']?>">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color: <?=$color?>"></div>
                                            </div>
                                        </label>
                                    <? } ?>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__price-wrap mt-32 pb-24">
                        <div class="product-item__price-sub-wrap">
                            <div class="product-item__old-price-wrap flex --align-center">
                                <div class="product-item__old-price h5 mr-12"><?= number_format($old_price, 0, '.', ' ') ?> Р</div>
                                <div class="product-item__sale-label p --s">-<?= $discount ?>%</div>
                            </div>
                            <? if ($item['price']) { ?>
                                <div class="product-item__price mt-6"><?=number_format($item['price'], 0, '.', ' ')?> Р</div>
                            <? } ?>
                        </div>
                    </div>
                    <div class="product-item__delivery-wrap flex --align-start --just-space mt-24">
                        <? if (isset($item['warranty']) && $item['warranty'] == true ) { ?>
                            <div class="product-item__delivery-info product-item__warranty --p">Гарантия: <span>есть</span></div>
                        <? } else { ?>
                            <div class="product-item__delivery-info product-item__warranty --p">Гарантия: <span style="color: red">нет</span></div>
                        <? } ?>
                        <? if (isset($item['condition'])) { ?>
                            <div class="product-item__delivery-info product-item__condition --p">Состояние: <span><?= $item['condition'] ?></span></div>
                        <? } ?>
                        <div class="product-item__delivery-info-wrap flex">
                            <div class="product-item__delivery-info-icon --svg__info mr-8"></div>
                            <div class="product-item__delivery-info-label --p">Детали доставки <br>уточняйте у менеджера</div>
                        </div>
                    </div>
                </div>
                <div class="product-item__order-wrap mt-48">
                    <div class="product-item__btns-wrap flex --align-center">
                        <div class="product-item__btns-sub-wrap flex --align-center">
                            <? if ($in_cart != true) { ?>
                            <a data-detail-btn="true" class="product-item__add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 p --xl mr-8">В корзину</a>
                            <? } else { ?>
                                <div class="product-item__add-btn btn --green p --xl mr-8">В корзине</div>
                            <? } ?>
                            <a href="#buy-on-click" data-popup="#buy-on-click" data-popup-title="Купить в 1 клик" class="product-item__buy-btn btn p --xl">Купить в 1 клик</a>
                        </div>
                        <div class="product-item__btns-sub-wrap flex --align-center">
                            <div class="product-item__favor-btn btn js-fave-add --svg__favor mr-24 <? if($in_fave == true) {?> is-active<?}?>"></div>
                            <!-- <div class="product-item__compare-btn btn --svg__compare mr-40"></div> -->
                            <div class="product-item__locaion-btn btn">
                                <div class="product-item__locaion-btn-icon --svg__location mr-12"></div>
                                <div class="product-item__locaion-btn-label --p">Шоу-рум <br><?=$item['store']?></div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__order-form mt-24">
                        <form action="#" method="post" name="form-9" class="order-form__wrap">
                            <div class="order-form__input-wrap flex --align-center">
                                <div class="order-form__icon --svg__tell"></div>
                                <div class="big-input">
                                    <input type="tel" name="tel" class="order-form__input big-input__input --js js-mask__tell">
                                    <div class="big-input__title">Ваш телефон:</div>
                                    <div class="big-input__error-wrap">
                                        <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                                        <div class="big-input__error-desc  p --m">Описание ошибки</div>
                                    </div>
                                </div>
                                <button type="send" disabled class="order-form__send-btn btn feedback btn-success"><span>ЗАПИСАТЬСЯ НА <br></span>БЕСПЛАТНЫЙ ТЕСТ ДРАЙВ</button>
                            </div>
                            <label class="order-form__checkbox order-form__policy-link checkbox">
                                <input type="checkbox" checked="checked" name="private" required>
                                <div class="flex">
                                    <div class="checkbox__trigger"></div>
                                    <div class="checkbox__label p --m ml-8">Даю согласие на <a href="/policy/" target="_blank" class="link"><b>обработку персональных данных</b></a></div>
                                </div>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        <? } else { ?>
            <div class="product-item__desc flex --direction-column --just-space col --6 pl-40">
                <div class="product-item__info">
                    <div class="product-item__status-wrap flex --align-center">
                        <? if ($item['in_stock'] == '+') { ?>
                            <div class="product-item__availability --p mr-24">В наличии</div>
                        <? } ?>
                        <? if ($item['demo']) { ?>
                            <div class="product-item__demo flex --align-center">
                                <div class="product-item__demo-icon --svg__demo mr-8"></div>
                                <div class="product-item__demo-label --p">Демо образец</div>
                            </div>
                        <? } ?>
                    </div>
                    <h1 class="product-item__name mt-12"><?=$item['name']?></h1>
                    <div class="product-item__info-wrap flex --align-center mt-12">
                        <div class="product-item__articul --p mr-24 pr-24">Арт: <?=$item['article']?></div>
                        <div class="product-item__rating flex">
                            <div class="rate flex mr-8">
                                <div id="star5" class="rate__icon is-active"></div>
                                <div id="star4" class="rate__icon is-active"></div>
                                <div id="star3" class="rate__icon is-active"></div>
                                <div id="star2" class="rate__icon"></div>
                                <div id="star1" class="rate__icon"></div>
                            </div>
                            <div class="rate__count --p">(16)</div>
                        </div>
                    </div>
                    <div class="product-item__color-pick mt-32">
                        <div class="color-pick__wrap flex --align-center">
                            <div class="color-pick__label --p mr-32">Цвет:</div>
                            <div class="color-pick__items flex">
                                <? foreach ($item['props'] as $key => $prop) { ?>  
                                    <? 
                                        if ($prop['name'] == 'Цвет корпуса' || $prop['name'] == 'Цвет') { 
                                            if ($prop['value'] == 'Черный') { $color = '#222';}
                                            if ($prop['value'] == 'Белый') { $color = '#FFF';}
                                            if ($prop['value'] == 'Бежевый') { $color = '#D0C8BE';}
                                            if ($prop['value'] == 'Розовый') { $color = '#DD0CBC';}
                                            if ($prop['value'] == 'Красный') { $color = '#E50005';}
                                            if ($prop['value'] == 'Серебристый') { $color = '#E5E5E5';}
                                            if ($prop['value'] == 'Коричневый') { $color = '#564043';}
                                    ?>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="<?=$prop['value']?>">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color: <?=$color?>"></div>
                                            </div>
                                        </label>
                                    <? } ?>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__price-wrap mt-32 pb-24">
                        <div class="product-item__price-sub-wrap">
                            <div class="product-item__old-price-wrap flex --align-center">
                                <div class="product-item__old-price h5 mr-12"><?= number_format($old_price, 0, '.', ' ') ?> Р</div>
                                <div class="product-item__sale-label p --s">-<?= $discount ?>%</div>
                            </div>
                            <? if ($item['price']) { ?>
                                <div class="product-item__price mt-6"><?=number_format($item['price'], 0, '.', ' ')?> Р</div>
                            <? } ?>
                        </div>
                        <div class="product-item__credit-wrap">
                            <div class="product-item__credit flex --align-center">
                                <div class="product-item__credit-icon --svg__credit mr-8"></div>
                                <div class="product-item__credit-label --p">Рассрочка:</div>
                            </div>
                            <!-- <div class="product-item__credit-payment mt-8">3 500 Р/мес.</div> -->
                            <div class="product-item__credit-payment mt-8"><?= number_format($installment, 0, '.', ' ') ?> Р/мес.</div>
                            <a href="#buy-on-click" data-popup="#buy-on-click" data-popup-title="Оформить рассрочку" class="product-item__order-link link --p">Оформить</a>
                        </div>
                        <div class="product-item__trade-wrap">
                            <div class="product-item__trade flex --align-center">
                                <div class="product-item__trade-icon --svg__trade mr-8"></div>
                                <div class="product-item__trade-label --p">Трейд-ин</div>
                            </div>
                            <!-- <div class="product-item__credit-payment mt-8">400 000 Р</div> -->
                            <div class="product-item__credit-payment mt-8"><?= number_format($trade_in, 0, '.', ' ') ?> Р</div>
                            <a href="#buy-on-click" data-popup="#buy-on-click" data-popup-title="Оставить заявку на Трейд-ин" class="product-item__order-link link --p">Оставить заявку</a>
                        </div>
                    </div>
                    <div class="product-item__delivery-wrap flex --align-center --just-space mt-24">
                        <div class="product-item__delivery-info --p">Доставка на дом <br>бесплатно: <span>завтра</span></div>
                        <div class="product-item__delivery-info --p">Забрать самостоятельно <br>бесплатно: <span>сегодня</span></div>
                        <div class="product-item__delivery-info-wrap flex">
                            <div class="product-item__delivery-info-icon --svg__info mr-8"></div>
                            <div class="product-item__delivery-info-label --p">Детали доставки <br>уточняйте у менеджера</div>
                        </div>
                    </div>
                </div>
                <div class="product-item__order-wrap mt-48">
                    <div class="product-item__btns-wrap flex --align-center --just-space">
                        <div class="product-item__btns-sub-wrap flex --align-center">
                            <? if ($in_cart != true) { ?>
                            <a data-detail-btn="true" class="product-item__add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 p --xl mr-8">В корзину</a>
                            <? } else { ?>
                                <div class="product-item__add-btn btn --green p --xl mr-8">В корзине</div>
                            <? } ?>
                            <a href="#buy-on-click" data-popup="#buy-on-click" data-popup-title="Купить в 1 клик" class="product-item__buy-btn btn p --xl">Купить в 1 клик</a>
                        </div>
                        <div class="product-item__btns-sub-wrap flex --align-center">
                            <div class="product-item__favor-btn btn js-fave-add --svg__favor mr-24 <? if($in_fave == true) {?> is-active<?}?>"></div>
                            <!-- <div class="product-item__compare-btn btn --svg__compare mr-40"></div> -->
                            <div class="product-item__locaion-btn btn">
                                <div class="product-item__locaion-btn-icon --svg__location mr-12"></div>
                                <div class="product-item__locaion-btn-label --p">Где <br>посмотреть</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__order-form mt-24">
                        <form action="#" method="post" name="form-9" class="order-form__wrap">
                            <div class="order-form__input-wrap flex --align-center">
                                <div class="order-form__icon --svg__tell"></div>
                                <div class="big-input">
                                    <input type="tel" name="tel" class="order-form__input big-input__input --js js-mask__tell">
                                    <div class="big-input__title">Ваш телефон:</div>
                                    <div class="big-input__error-wrap">
                                        <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                                        <div class="big-input__error-desc  p --m">Описание ошибки</div>
                                    </div>
                                </div>
                                <button type="send" disabled class="order-form__send-btn btn feedback btn-success"><span>ЗАПИСАТЬСЯ НА <br></span>БЕСПЛАТНЫЙ ТЕСТ ДРАЙВ</button>
                            </div>
                            <label class="order-form__checkbox order-form__policy-link checkbox">
                                <input type="checkbox" checked="checked" name="private" required>
                                <div class="flex">
                                    <div class="checkbox__trigger"></div>
                                    <div class="checkbox__label p --m ml-8">Даю согласие на <a href="/policy/" target="_blank" class="link"><b>обработку персональных данных</b></a></div>
                                </div>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
</div>