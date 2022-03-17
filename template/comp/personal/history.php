<div class="history">
    <div class="page-header-perosnal__top-wrap flex --just-space --align-center">
        <h1 class="page-header__title h1"><b>Профиль</b></h1>
        <div class="page-header-perosnal__log-out-wrap flex --align-center">
            <div class="page-header__user-name p --xl mr-24">test@test.com</div>
            <div class="page-header-perosnal__log-out btn --fill-1">
                <span class="p --xl">Выйти</span>
            </div>
        </div>
    </div>
    <div class="history__wrap flex --just-space  mt-40">
        <div class="personal-nav col --3 pr-56">
            <div class="personal-nav__stiky-wrap js-stiky">
                <div class="personal-nav__links">
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/cart.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Заказы <b>(3)</b></span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/clock.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>История заказов <b>(3)</b></span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/favor.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Избранное <b>(16)</b></span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center is-active">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/auth-2.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Личные данные</span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/compare.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Сравнения</span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/logout.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Выйти</span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="personal-page__content col --9">
            <div class="order-history">
                <div class="tabs">
                    <div class="order-history__tabs tabs__btns flex --align-center">
                        <div class="order-history__tab mr-24 h5 tabs__btn --js" data-tab="1">Все</div>
                        <div class="order-history__tab mr-24 h5 tabs__btn --js is-active" data-tab="2">Новые</div>
                        <div class="order-history__tab mr-24 h5 tabs__btn --js" data-tab="3">Закрытые</div>
                    </div>
                    <div class="order-history__tabs tabs__blocks mt-40">
                        <div class="tabs__block --js --1">
                            
                        </div>
                        <div class="tabs__block --js --2 is-show">
                            <div class="order-history__sort-head pb-24 mt-48 flex --just-space">
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Заказ</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Сумма</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Статус</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Дата и время заказа</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-history__items">
                                <? for ($d=0; $d < 3; $d++) { ?>
                                    <div class="order-history-item">
                                        <div class="order-history-item__head flex --just-space --align-center py-32">
                                            <div class="order-history-item__name p --xl col --2">Заказ #2012/11</div>
                                            <div class="order-history-item__price p --xl col --2">5 560 р.</div>
                                            <div class="order-history-item__status col --2"><i class="order-history-item__status-circle"></i><span>Закрыт</span></div>
                                            <div class="order-history-item__date col --2">29.08.2019 13:11</div>
                                            <div class="order-history-item__toggle-btn">
                                                <div class="order-history-item__toggle-btn-v-line"></div>
                                                <div class="order-history-item__toggle-btn-h-line"></div>
                                            </div>
                                        </div>
                                        <div class="order-history-item__detail-info">
                                            <div class="order-history-item__items">
                                                <? for ($i=1; $i < 4; $i++) { ?>
                                                    <div class="order-history-item__item">
                                                        <div class="cart-item py-40 flex">
                                                            <a href="#" class="cart-item__tumb flex --align-center mr-32">
                                                                <img data-src="/template/dist/img/chair-<?=$i?>--min.png" alt="" class="cart-item__iamge --min lazy">
                                                            </a>
                                                            <div class="cart-item__info col --auto">
                                                                <div class="cart-item__head">
                                                                    <a href="#" class="cart-item__name p --xl link --color-dark">Стул Диана велюр серый</a>
                                                                    <div class="cart-item__props mt-8 flex">
                                                                        <div class="cart-item__prop mr-16 p --m">Цвет: <b>Серый</b></div>
                                                                        <div class="cart-item__prop p --m">Артикул: <b>УТ000001378</b></div>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-item__bottom mt-16 flex --just-space --align-center">
                                                                    <div class="cart-item__info-itmes grid --gap-24 --temp-col-5">
                                                                        <div class="cart-item__info-col">
                                                                            <div class="cart-item__info-label p --m mb-8">Цена:</div>
                                                                            <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                        </div>
                                                                        <div class="cart-item__info-col">
                                                                            <div class="cart-item__info-label p --m mb-8">Коло-во:</div>
                                                                            <div class="cart-item__info-value p --l"><b>1</b></div>
                                                                        </div>
                                                                        <div class="cart-item__info-col">
                                                                            <div class="cart-item__info-label p --m mb-8">Всего:</div>
                                                                            <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                        </div>
                                                                        <div class="cart-item__info-col">
                                                                            <div class="cart-item__info-label p --m mb-8">Доставлен</div>
                                                                            <div class="cart-item__info-value p --l"><b>04.09.2019</b></div>
                                                                        </div>
                                                                        <div class="cart-item__info-col">
                                                                            <div class="cart-item__info-label p --m mb-8">Оплата</div>
                                                                            <div class="cart-item__info-value p --l"><b>Наличными</b></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <? } ?>
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                        <div class="tabs__block --js --3">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>