<?php 
    $rec = json_decode(file_get_contents(API.'/api/get-items.php?props=true&filter=[{"type":"brands","values":["Casada"]}]'), true);
    $keys = array_rand($rec, 12);
    $random = [];
    foreach ($keys as $key => $item) {
        array_push($random, $rec[$item]);
    }
    // $random = array_slice($random, 0, 12);
?>
<div class="additionals-carousel">
    <div class="js-swiper__additionals type-carusel">
    	<div class="type-carusel__head flex --align-center --just-space mb-32">
            <div class="type-carusel__title h3">Рекомендуем к покупке</div>
    		<div class="type-carusel__nav flex --align-center">
    		    <div class="type-carusel__nav-wrap flex --align-center mr-16">
    		        <div class="type-carusel__btn --left swiper-button-prev --products">
                        <div class="type-carusel__btn-icon --svg__arrow-2--left"></div>
                    </div>
        			<div class="type-carusel__pagination mx-16">
        				<div class="swiper-pagination --products"></div>
        			</div>
        		    <div class="type-carusel__btn --right swiper-button-next --products">
                        <div class="type-carusel__btn-icon --svg__arrow-2--right"></div>
                    </div>
    		    </div>
                <!-- <div class="type-carusel__all-btn btn --fill-1">Все</div> -->
    		</div>
    	</div>
    	<div class="type-carusel__swiper">
    		<div class="swiper-container --products">
    			<div class="swiper-wrapper">
                    <? 
                        foreach ($random as $key => $item) { 
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
                    ?>
                        <div class="swiper-slide">
                            <div class="additional-item js-cart-parent pt-12">
                                <input type="hidden" class="js-cart-id js-fave-id" value="<?=$item['id']?>">
                                <a href="<?=$detail_link?>" class="additional-item__cover">
                                    <picture class="additional-item__cover-img lazy">
                                        <?php $img_min = str_replace('https://images.ru.prom.st/', 'min-', $item['img'][0]) ?>
                                        <source srcset="/template/dist/img/<?= $img_min ?>" type="image/webp">
                                        <source srcset="/template/dist/img/<?= $img_min ?>" type="image/png">
                                    </picture>
                                </a>
                                <div class="product-item__desc mt-8">
                                    <div class="product-item__name-wrap mt-8">
                                        <a href="<?=$detail_link?>" class="product-item__name  link --color-dark"><?=$item['name']?></a>
                                    </div>
                                    <div class="product-item__price-wrap flex --align-center --just-space mt-12">
                                        <!-- <div class="mini-basket-item__counter">
                                            <div class="counter-calc" data-min="1" data-max="999">
                                                <div class="js-cart-item-count mini-basket-item__counter-calc-wrap flex --align-center">
                                                    <input type="text" class="js-cart-item-count-val mini-basket-item__counter-input counter-calc__input h5" value="1">
                                                    <div class="mini-basket-item__counter-btns">
                                                        <div class="js-cart-item-count-change mini-basket-item__counter-btn --top counter-calc__btn btn js-plus">
                                                            <div class="mini-basket-item__counter-btn-icon --svg__counter--plus"></div>
                                                        </div>
                                                        <div class="js-cart-item-count-change mini-basket-item__counter-btn --btm counter-calc__btn disable-btn btn js-minus  <?if ($el['count'] == 1) {?> is-disable <? } ?>">
                                                            <div class="mini-basket-item__counter-btn-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="basket-item__total-price">
                                            <div class="basket-item__total-price-label p --m">Цена:</div>
                                            <div class="basket-item__total-price-value h5"><?=number_format($item['price'], 0, '.', ' ')?> Р</div>
                                        </div>
                                    </div>
                                    <div class="product-item__btns-mini mt-16">
                                        <? if ($in_cart == true ){ ?>
                                            <div data-detail-btn="true" class="product-item__add-btn js-cart-add btn --green js-cart-removed --id-<?=$item['id']?>">В корзине</div>
                                        <? } else { ?>
                                            <div data-detail-btn="true" class="product-item__add-btn js-cart-add btn --fill-1 js-cart-removed --id-<?=$item['id']?>">Добавить</div>
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>
    			</div>
    		</div>
    	</div>
    </div>
</div>