<?php 
    $api_url = 'http://'.$_SERVER['HTTP_HOST'];
    define("API", $api_url);
    $cart_items = [];
    if ($_COOKIE['cart']) {
        $cart = json_decode($_COOKIE['cart'], true);
        $ids = [];
        if (count($cart) > 0) {
            foreach ($cart as $key => $el) {
                array_push($ids, $el['id']);
            }
        }
        $ids = json_encode($ids);
        $url = API.'/api/get-items.php?ids='.$ids;
        $items = json_decode(file_get_contents($url), true);
    
        $cart_items = [];
        foreach ($cart as $key => $el) {
            foreach ($items as $key => $item) {
                if ($el['id'] == $item['id']) {
                    $itm = [
                        "id"=>$el['id'],
                        "count"=>$el['count'],
                        "item"=>$item,
                    ];
                    array_push($cart_items, $itm);
                }
            }
        }
        $cart_items = array_reverse($cart_items);
        $total_price = 0;
        foreach ($cart_items as $key => $el) {
            $price = $el['item']['price'] * $el['count'];
            $total_price = $total_price + $price;
        }
        $total = [
            "count" => count($cart_items),
            "total_price" => $total_price,
        ];
    }
?>
<? 
    if ($_GET['view'] == 'total') { 
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($total);
    }
?>
<? if ($_GET['view'] == 'mini') { ?>
    <? 
        $cart_items = array_slice($cart_items, 0 ,2);
        foreach ($cart_items as $key => $el) { 
            $section_code = strtolower(str_replace('https://tiu.ru/', '', $el['item']['category_link']));
            $detail_link = '/catalog/'.$section_code.'/'.$el['item']['code'].'/';
            $el_price = $el['item']['price'] * $el['count'];
            $discount = 15;
            $old_price = $el['item']['price'] + (($discount / 100) * $el['item']['price']);
    ?>
        <div class="mini-basket-item flex --align-center --just-space js-cart-parent">
            <input type="hidden" class="js-cart-id" value="<?=$el['id']?>">
            <div class="mini-basket-item__desc-wrap flex --align-center">
                <div class="mini-basket-item__number p --m mr-16"><?=$key + 1?></div>
                <a href="<?=$detail_link?>" class="mini-basket-item__img lazy mr-32">
                    <picture class="mini-basket-item__img-thumb lazy">
                        <?php $img_min = str_replace('https://images.ru.prom.st/', 'min-', $el['item']['img'][0]) ?>
                        <source srcset="/template/dist/img/<?= $img_min ?>" type="image/webp">
                        <source srcset="/template/dist/img/<?= $img_min ?>" type="image/png">
                    </picture>
                </a>
                <div class="mini-basket-item__info-wrap">
                    <div class="mini-basket-item__article p --m">Арт: <?=$el['item']['article']?></div>
                    <a href="<?=$detail_link?>" class="mini-basket-item__name link --color-dark --p mt-6"><?=$el['item']['name']?></a>
                </div>
            </div>
            <div class="mini-basket-item__manage-wrap flex --align-center">
                <div class="product-item__price-sub-wrap mr-24">
                    <div class="product-item__old-price-wrap flex --align-center">
                        <div class="product-item__old-price p --s mr-8"><?= number_format($old_price, 0, '.', ' ') ?> Р</div>
                        <div class="product-item__sale-label p --s">-<?= $discount ?>%</div>
                    </div>
                    <div class="product-item__price h5 mt-6"><?=number_format($el_price, 0, '.', ' ')?></div>
                </div>
                <div class="mini-basket-item__counter mr-32">
                    <div class="counter-calc" data-min="1" data-max="999">
                        <div class="js-cart-item-count mini-basket-item__counter-calc-wrap flex --align-center">
                            <input type="text" class="js-cart-item-count-val mini-basket-item__counter-input counter-calc__input h5" value="<?=$el['count']?>">
                            <div class="mini-basket-item__counter-btns">
                                <div class="mini-basket-item__counter-btn --top counter-calc__btn btn js-plus js-cart-item-count-change">
                                    <div class="mini-basket-item__counter-btn-icon --svg__counter--plus"></div>
                                </div>
                                <div class="mini-basket-item__counter-btn --btm counter-calc__btn disable-btn btn js-minus  js-cart-item-count-change <?if ($el['count'] == 1) {?> is-disable <? } ?>">
                                    <div class="mini-basket-item__counter-btn-icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mini-basket-item__del-btn btn --svg__trash js-cart-item-remove"></div>
            </div>
        </div>
    <? } ?>
<? } ?>
<? if ($_GET['view'] == 'basket') { ?>
    <? 
        foreach ($cart_items as $key => $el) { 
            $section_code = strtolower(str_replace('https://tiu.ru/', '', $el['item']['category_link']));
            $detail_link = '/catalog/'.$section_code.'/'.$el['item']['code'].'/';
            $el_price = $el['item']['price'] * $el['count'];
            $discount = 15;
            $old_price = $el['item']['price'] + (($discount / 100) * $el['item']['price']);
    ?>
    <div class="basket-item js-fave-parent flex --align-center js-cart-parent">
     <input type="hidden" class="js-cart-id js-fave-id" value="<?=$el['id']?>">
        <a href="<?=$detail_link?>" class="mini-basket-item__img lazy mr-32">
            <picture class="mini-basket-item__img-thumb lazy">
                <?php $img_min = str_replace('https://images.ru.prom.st/', 'min-', $el['item']['img'][0]) ?>
                <source srcset="/template/dist/img/<?= $img_min ?>" type="image/webp">
                <source srcset="/template/dist/img/<?= $img_min ?>" type="image/png">
            </picture>
        </a>
        <div class="basket-item__info-wrap">
            <div class="basket-item__head-info pb-20">
                <a href="<?=$detail_link?>" class="mini-basket-item__name link --color-dark h5"><?=$el['item']['name']?></a>
                <div class="mini-basket-item__info-sub-wrap flex --align-center">
                    <div class="mini-basket-item__modify --p">
                        Арт: 
                        <span class="mini-basket-item__modify-value"><?=$el['item']['article']?>;</span>
                    </div>
                    &nbsp;
                    <div class="mini-basket-item__color --p mr-16">
                        Цвет: 
                        <? foreach ($el['item']['props'] as $key => $prop) { ?>  
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
                                <span class="mini-basket-item__color-value"><?=$prop['value']?>;</span>
                            <? } ?>
                        <? } ?>
                    </div>
                </div>
            </div>
            <div class="basket-item__options-wrap flex --align-center --just-space mt-20">
                <div class="basket-item__price-wrap flex --align-center">
                    <div class="product-item__price-sub-wrap mr-40">
                        <div class="product-item__price h5"><?=number_format($el['item']['price'], 0, '.', ' ')?> Р</div>
                        <div class="product-item__old-price-wrap flex --align-center">
                            <div class="product-item__old-price --p mr-6"><?= number_format($old_price, 0, '.', ' ') ?> Р</div>
                            <div class="product-item__sale-label p --s">-<?= $discount ?>%</div>
                        </div>
                    </div>
                    <div class="mini-basket-item__counter-wrap flex --align-center">
                        <div class="mini-basket-item__counter mr-16">
                            <div class="counter-calc" data-min="1" data-max="999">
                                <div class="js-cart-item-count mini-basket-item__counter-calc-wrap flex --align-center">
                                    <input type="text" class="js-cart-item-count-val mini-basket-item__counter-input counter-calc__input h5" value="<?=$el['count']?>">
                                    <div class="mini-basket-item__counter-btns">
                                        <div class="mini-basket-item__counter-btn --top counter-calc__btn btn js-plus js-cart-item-count-change">
                                            <div class="mini-basket-item__counter-btn-icon --svg__counter--plus"></div>
                                        </div>
                                        <div class="mini-basket-item__counter-btn --btm counter-calc__btn disable-btn btn js-minus js-cart-item-count-change <?if ($el['count'] == 1) {?> is-disable <? } ?>">
                                            <div class="mini-basket-item__counter-btn-icon"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="basket-item__total-price">
                            <div class="basket-item__total-price-label p --m">Всего:</div>
                            <div class="basket-item__total-price-value h5"><b><span><?=number_format($el_price, 0, '.', ' ')?></span> Р</b></div>
                            <!-- <div class="basket-item__total-price-sale p --s">Скидка: 2 450 ₽</div> -->
                        </div>
                    </div>
                </div>
                <div class="basket-item__btns-wrap flex --align-center">
                    <div class="product-item__favor-btn btn js-fave-add --svg__favor mr-8"></div>
                    <!-- <div class="product-item__compare-btn btn --svg__compare mr-8"></div> -->
                    <div class="mini-basket-item__del-btn btn --fill-1 --svg__trash js-cart-item-remove"></div>
                </div>
            </div>
        </div>
    </div>
    <? } ?>
<? } ?>