<?php 
    $cart_mini = file_get_contents(API.'/api/get-cart.php?view=mini', false, $context);
    $discount = 15;
    $old_price = $item['price'] + (($discount / 100) * $item['price']);
?>
<div class="header-middle mt-32">
    <div class="center-wrap flex --align-center --just-space">
        <div class="header-middle__logo-wrap flex --align-center --just-space col --3">
            <a href="/" class="header-middle__logo link --svg__logo">
                <span>Инвестиции в твое здоровье</span>
            </a>
            <!-- <div class="header-middle__menu">
                <div class="header-middle__menu-btn">
                    <div class="header-middle__menu-btn-piece"></div>
                    <div class="header-middle__menu-btn-piece"></div>
                    <div class="header-middle__menu-btn-piece"></div>
                </div>
            </div> -->
        </div>
        <div class="header-middle__search col --7">
            <div class="header-middle__search-wrap">
                <form action="/search/" method="get" name="search" class="header-middle__form-wrap">
                    <input name="search" class="header-middle__search-input input" name="header_search" type="text" placeholder="Поиск по товарам ..." value="<?=$_GET['search']?>">
                    <div class="header-middle__select-wrap col --2">
                        <select name="group_numb" class="header-middle__search-select select --svg__arrow">
                            <option value="*">Все категории</option>
                            <? foreach ($sections_list as $key => $item) { ?>
                                <option value="<?=$item['group_numb']?>"><?=$item['name']?></option>
                            <? } ?>
                        </select>
                    </div>
                    <button type="send" class="header-middle__search-btn btn --svg__search col --1"></button>
                </form>
            </div>
        </div>
        <div class="header-middle__menu-items flex --just-end col --2">
            <!-- <a href="/login/" class="menu-item link">
                <div class="menu-item__icon --svg__auth"></div>
                <div class="menu-item__label mt-8">Войти</div>
            </a> -->
            <a href="/fave/" class="menu-item link">
                <? if ($fave_total != null || $fave_total['count'] != 0) { ?>
                    <div class="menu-item__count p --s js-fave-total-count --fave <? if ($fave_total == null || $fave_total['count'] == 0) { ?> --hidden<? } ?>"><?=$fave_total['count']?></div>
                <? } else { ?>
                    <div class="menu-item__count p --s js-cart-fave-count --fave <? if ($fave_total == null || $fave_total['count'] == 0) { ?> --hidden<? } ?>"></div>
                <? } ?>
                <div class="menu-item__icon --svg__favor"></div>
                <div class="menu-item__label mt-8">Избранное</div>
            </a>
            <div class="menu-item__wrap --basket">
                <a href="/cart/" class="menu-item link">
                    <? if ($cart_total != null || $cart_total['count'] != 0) { ?>
                        <div class="menu-item__count p --s js-cart-total-count --cart <? if ($cart_total == null || $cart_total['count'] == 0) { ?> --hidden<? } ?>"><?=$cart_total['count']?></div>
                    <? } else { ?>
                        <div class="menu-item__count p --s js-cart-total-count --cart <? if ($cart_total == null || $cart_total['count'] == 0) { ?> --hidden<? } ?>"></div>
                    <? } ?>
                    <div class="menu-item__icon --svg__cart"></div>
                    <div class="menu-item__label mt-8">Корзина</div>
                </a>
                <div class="mini-basket tooltip__block <? if ($cart_total == null || $cart_total['count'] == 0) { ?> --hidden<? } ?>">
                    <div class="mini-basket__wrap tooltip__wrap mt-16">
                        <div class="mini-basket__items js-cart-mini-items">
                            <?=$cart_mini?>
                        </div>
                        <div class="mini-basket__show-all-wrap flex --align-center mt-24">
                            <div class="mini-basket__show-all-line"></div>
                            <a href="/cart/" class="mini-basket__show-all-link link --p mx-32"><b>показать все товары</b></a>
                            <div class="mini-basket__show-all-line"></div>
                        </div>
                        <div class="mini-basket__total-wrap flex --align-center --just-space mt-24">
                            <div class="mini-basket__total-price">
                                <div class="mini-basket__final-cost-title --p">Всего:</div>
                                <div class="mini-basket__final-cost-value"><b><span class="js-cart-total-price"><?=number_format($cart_total['total_price'], 0, '.', ' ')?></span> Р</b></div>
                            </div>
                            <div class="product-item__btns flex --align-center">
                                <a href="#order-on-click" data-popup="#order-on-click" class="product-item__buy-btn btn p --l mr-8">Оформить в 1 клик</a>
                                <a href="/cart/" class="product-item__add-btn btn --fill-1 p --l">Оформить</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item__shade <? if ($cart_total == null || $cart_total['count'] == 0) { ?> --hidden<? } ?>"></div>
            </div>
        </div>
    </div>
</div>