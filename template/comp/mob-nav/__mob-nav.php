<?php
    $sections_list = json_decode(file_get_contents(API.'/api/get-sections.php'), true);
?>
<div class="bottom-nav">
    <div class="bottom-nav__bar flex --just-space">
        <a href="/" class="bottom-nav__bar-link --home link flex --direction-column --just-space --align-center">
            <div class="bottom-nav__bar-icon --svg__home"></div>
            <div class="bottom-nav__bar-label">Главная</div>
        </a>
        <div class="bottom-nav__bar-link --catalog link flex --direction-column --just-space --align-center js-mob-catalog-menu">
            <div class="bottom-nav__bar-icon --svg__catalog"></div>
            <div class="bottom-nav__bar-label">Каталог</div>
        </div>
        <a href="http://msg-html/поиск.php" class="bottom-nav__bar-link --search link flex --direction-column --just-space --align-center">
            <div class="bottom-nav__bar-icon --svg__search"></div>
            <div class="bottom-nav__bar-label">Поиск</div>
        </a>
        <a href="/fave/" class="bottom-nav__bar-link --favor link flex --direction-column --just-space --align-center">
            <div class="bottom-nav__bar-icon --svg__favor"></div>
            <div class="bottom-nav__bar-label">Избранное</div>
            <? if ($fave_total != null || $fave_total['count'] != 0) { ?>
                <div class="header__personal-count js-fave-total-count --fave <? if ($fave_total == null || $fave_total['count'] == 0) { ?> --hidden<? } ?>"><?=$fave_total['count']?></div>
            <? } else { ?>
                <div class="header__personal-count js-cart-fave-count --fave <? if ($fave_total == null || $fave_total['count'] == 0) { ?> --hidden<? } ?>"></div>
            <? } ?>
        </a>
        <a href="/cart/" class="bottom-nav__bar-link --cart link flex --direction-column --just-space --align-center js-toggle-full-menu">
            <div class="bottom-nav__bar-icon --svg__cart"></div>
            <div class="bottom-nav__bar-label">Корзина</div>
            <? if ($cart_total != null && count($cart_total) > 0 && $cart_total['count'] != 0) { ?>
                <div class="header__personal-count js-cart-total-count --cart <? if ($cart_total == null || $cart_total['count'] == 0) { ?> --hidden<? } ?>"><?=$cart_total['count']?></div>
            <? } else { ?>
                <div class="header__personal-count js-cart-total-count --cart <? if ($cart_total == null || $cart_total['count'] == 0) { ?> --hidden<? } ?>"></div>
            <? } ?>
        </a>
    </div>
    <div class="bottom-nav__catalog-menu">
        <div class="mob-catalog-menu">
            <div class="mob-catalog-menu__head flex --align-center --just-space">
                <div class="mob-catalog-menu__label h3"><b>Каталог</b></div>
                <div class="mob-catalog-menu__close-btn mob-nav__close-menu js-mob-catalog-menu"></div>
            </div>
            <div class="full-menu__sections mt-32">
                <? foreach ($sections_list as $key => $item) { ?>   
                    <div class="mob-catalog-menu__section">
                        <div class="mob-catalog-menu__btn-wrap flex --align-start --just-space">
                            <a href="/catalog/<?=$item['code']?>/" class="section-link flex --align-center link" data-section-id="0"><?=$item['name']?></a>
                            <!-- <div class="mob-catalog-menu__toggle-btn flex --align-center --just-center">
                                <div class="mob-catalog-menu__toggle-btn-v-line"></div>
                                <div class="mob-catalog-menu__toggle-btn-h-line"></div>
                            </div> -->
                        </div>
                        <!-- <div class="mob-catalog-menu__subsections">
                            <div class="full-menu__subsections ">
                                <a href="#" class="subsections-link flex --align-center link">Массажные кресла</a>
                                <a href="#" class="subsections-link flex --align-center link">Массажные кресла</a>
                                <a href="#" class="subsections-link flex --align-center link">Массажные кресла</a>
                                <a href="#" class="subsections-link flex --align-center link">Массажные кресла</a>
                            </div>
                        </div> -->
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
</div>
<div class="mob-nav">
    <div class="mob-nav__bar">
        <div class="mob-nav__wrap flex --just-space --align-center">
            <div class="mob-nav__menu-btn js-toggle-full-menu flex --just-center --align-center --direction-column">
                <div class="mob-nav__menu-btn-line"></div>
                <div class="mob-nav__menu-btn-line"></div>
                <div class="mob-nav__menu-btn-line"></div>
            </div>
            <a href="/" class="mob-nav__logo">
                <img src="/template/dist/img/logo.svg" alt="" class="mob-nav__logo-img">
            </a>
            <a href="tel:88006004126" class="mob-nav__tel-link --svg__tell"></a>
        </div>
    </div>
    <div class="mob-nav__full-menu">
        <div class="mob-nav__menu-shade animated fadeIn js-toggle-full-menu"></div>
        <div class="mob-nav__close-menu js-toggle-full-menu"></div>
        <div class="mob-nav__menu animated fadeInLeft">
            <ul class="mob-nav__menu-items">
                <li class="mob-nav__menu-item">
                    <a href="/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Главная</div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <li class="mob-nav__menu-item">
                    <a href="/catalog/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Каталог</div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <!-- <li class="mob-nav__menu-item">
                    <a href="#" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Блог</div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li> -->
                <li class="mob-nav__menu-item">
                    <a href="/shops/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Наши магазины</div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <!-- <li class="mob-nav__menu-item">
                    <a href="#" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Оплата</div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li> -->
                <li class="mob-nav__menu-item">
                    <a href="/delivery/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Доставка и оплата</div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <li class="mob-nav__menu-item">
                    <a href="/service/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Гарантии и свервис</div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <li class="mob-nav__menu-item">
                    <a href="/contacts/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Контакты</div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <!-- <li class="mob-nav__menu-item">
                    <a href="#" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Вход</div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <li class="mob-nav__menu-item">
                    <a href="#" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Регистрация</div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li> -->
            </ul>
        </div>
    </div>
</div>