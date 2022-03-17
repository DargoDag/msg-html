<?php
    $api_url = 'http://'.$_SERVER['HTTP_HOST'];
    define("API", $api_url);
    $recomendation = json_decode(file_get_contents(API.'/api/get-items.php?group_numb='.'35710046'.'&random=true'), true);
    $breadcrumbs = [
        [
            "name"=>"Блог",
            "link"=> "/blog/"
        ],
        [
            "name"=> 'Топ 9 недорогих моделей',
            "link"=> null
        ]
    ];
	$meta__title = "Топ-9 недорогих кресел по версии специалистов магазина Массажер-Маркет";
	$meta__desc  = "Кресла в ценовом диапазоне от 150 000 до 350 000 рублей";
	$meta__key   = "";
	$modifier = "--banner";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap --promo">
	<div class="content__page-banner --promo --promo-new">
		<div class="content__banner-wrap">
			<div class="center-wrap">
				<div class="content__banner-sub-wrap">
					<h1 class="content__banner-title">Топ-9 недорогих кресел по версии специалистов магазина Массажер-Маркет</h1>
                </div>
			</div>
		</div>
		<picture class="content__banner-img lazy">
			<source srcset="/template/dist/img/promo-banner.webp" type="image/webp">
			<img src="/template/dist/img/promo-banner.jpg" type="image/jpg">
		</picture>
        <div class="content__banner-mask"></div>
		<div class="content__banner-bottom"></div>
	</div>
	<div class="center-wrap --promo --promo-new pt-40">
		<div class="promo-title h5">
			Сегодня массажное кресло является не только предметом роскоши <br>Имея богатый опыт, и большое количество обратной связи от клиентов, наша команда <br>подготовила обзор бюджетных автоматических массажных кресел, на которые стоит обратить <br>внимание при выборе. Кресла в ценовом диапазоне от 150 000 до 350 000 рублей, с <br>достаточным набором функционала, чтобы удовлетворить взыскательного покупателя. На все <br>представленные кресла распространяется фирменная гарантия от производителя.
		</div>			
		<div class="content__line col --12 mt-48"></div>
		<div class="content__promo-wrap --promo col --12 mt-72">
            <div class="promo-carusel">
                <div class="js-swiper__promo type-carusel">
                    <div class="type-carusel__head flex --align-center --just-space mb-32">
                        <div class="type-carusel__title h3">Модели</div>
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
                            <a href="/promo/" class="type-carusel__all-btn btn --fill-1">Все</a>
                        </div>
                    </div>
                    <div class="type-carusel__swiper">
                        <div class="swiper-container --promo">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-ecto-sport-beige/" class="catalog-item__title link h5">Bodo Ecto Sport</a>
                                                    <div class="catalog-item__descr">Роскошное массажное кресло, концепция элегантности и простоты.</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-ecto-sport-beige/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-ecto-sport-beige/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/bodo-ecto-sport-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/bodo-ecto-sport-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-nakidki/" class="catalog-item__title link h5">OTO TITAN</a>
                                                    <div class="catalog-item__descr">Умный целитеть вашего тела</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-nakidki/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-nakidki/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/oto-titan-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/oto-titan-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-betasonic-2-seroye/" class="catalog-item__title link h5">Casada BetaSonic 2</a>
                                                    <div class="catalog-item__descr">Массаж от шеи до бедер</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-betasonic-2-seroye/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-betasonic-2-seroye/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/casada-betasonic2-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/casada-betasonic2-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-richter-balance-terracotta-brown/" class="catalog-item__title link h5">Richter Balance</a>
                                                    <div class="catalog-item__descr">Массажное кресло нового поколения</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-richter-balance-terracotta-brown/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-richter-balance-terracotta-brown/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/richter-balance-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/richter-balance-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-nakidki/" class="catalog-item__title link h5">Casada Alphasonic 2</a>
                                                    <div class="catalog-item__descr">Кресло с широким набором дополнительных возможностей</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-nakidki/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-nakidki/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/casada-alfasonic2-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/casada-alfasonic2-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-nakidki/" class="catalog-item__title link h5">FUJIMO Qi F633</a>
                                                    <div class="catalog-item__descr">Умный целитеть вашего тела</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-nakidki/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-nakidki/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/fujimo-qi-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/fujimo-qi-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-nakidki/" class="catalog-item__title link h5">Ergonova Organic 4 PM</a>
                                                    <div class="catalog-item__descr">Удовлетворяет абсолютно любые запросы</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-nakidki/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-nakidki/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/ergonova-organic-4-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/ergonova-organic-4-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-sensa-smart-m-brown-grey-/" class="catalog-item__title link h5">Sensa Smart M</a>
                                                    <div class="catalog-item__descr">Лучший вариант для небольшого помещения</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-sensa-smart-m-brown-grey-/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-sensa-smart-m-brown-grey-/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/sensa-smart-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/sensa-smart-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-rovos-r652l-gray/" class="catalog-item__title link h5">ROVOS 652L</a>
                                                    <div class="catalog-item__descr">Массаж от шеи до бедер</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-rovos-r652l-gray/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-rovos-r652l-gray/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/rovos-652l-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/rovos-652l-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <div class="content__main-wrap pt-48">
            <div class="center-wrap">
                <div class="promo">
                    <div class="promo__cards">
                        <div class="promo__item promo-item --big js-cart-parent">
                            <input type="hidden" class="js-cart-id js-fave-id" value="499392950">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F5F5F5 ;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/bodo-ecto-sport1.webp" type="image/webp">
                                        <img src="/template/dist/img/bodo-ecto-sport1.png" type="image/png" alt="">
                                    </picture>
                                </div>
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>
                            </div>
                            <div class="promo-item__content-wrapper">
                                <div class="promo-item__header item-header">
                                    <div class="item-header__title">Bodo Ecto Sport</div>
                                    <div class="item-header__desc mt-12">Стандартное современное массажное кресло с оптимальным набором функций. Отличается прочностью: выдерживает пользователя весом до 150 кг. Вам будут доступны 12 готовых автоматических программ и 5 слотов для настройки собственных программ массажа.</div>
                                </div>
                                <div class="promo-item__set-color mt-24">
                                    <div class="color-pick__wrap flex --align-center">
                                        <div class="color-pick__label --p mr-16">Цвет:</div>
                                        <div class="color-pick__items flex">
                                            <label class="color-item checkbox">
                                                <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                                <div class="color-item__thumb">
                                                    <div class="color-item__color" style="background-color:#A7A1AB"></div>
                                                </div>
                                            </label>
                                            <label class="color-item checkbox">
                                                <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                                <div class="color-item__thumb">
                                                    <div class="color-item__color" style="background-color:#E3D6B4"></div>
                                                </div>
                                            </label>
                                            <label class="color-item checkbox">
                                                <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                                <div class="color-item__thumb">
                                                    <div class="color-item__color" style="background-color:#602C10"></div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="promo-item__purchase purchase flex">
                                    <div class="purchase__wrap">
                                        <div class="purchase__old-price flex --align-center"><s>413 800 Р</s> <span class="purchase__discount">-15%</span></div>
                                        <div class="purchase__price">359 900 Р</div>
                                    </div>
                                    <div class="purchase__sub-wrap flex">
                                        <? if ($in_cart != true) { ?>
                                            <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                        <? } else { ?>
                                            <div class="product-item__add-btn btn --green --l">В корзине</div>
                                        <? } ?>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-ecto-sport-beige/" class="purchase__more-btn btn --l">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="promo-item__specs specs">
                                <div class="specs__title">Технические характеристики:</div>
                                <div class="specs__wrap">
                                    <div class="specs__row">
                                        <div class="specs__name">Материал обивки:</div>
                                        <div class="specs__value">высококачественная искусственная кожа</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Виды массажа:</div>
                                        <div class="specs__value">воздушно-компрессионный, массаж Шиацу, роликовый, согревающий, 3d-массаж</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">бедра, голени, голова, колени, ноги, плечи, поясница, руки, спина, стопы, шея, ягодицы</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Дополнительные функции:</div>
                                        <div class="specs__value">прогрев, подсветка</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Регулировки: </div>
                                        <div class="specs__value">зона массажа, интенсивность массажа, угол наклона спинки</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Вес пользователя:</div>
                                        <div class="specs__value">до 150 кг</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Режим нулевой гравитации:</div>
                                        <div class="specs__value">Zero-Gravity или Zero-G</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo__item promo-item js-cart-parent">
                            <input type="hidden" class="js-cart-id js-fave-id" value="">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F0EBE5;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/oto-titan.webp" type="image/webp">
                                        <img src="/template/dist/img/oto-titan.png" type="image/png" alt="">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">Oto Titan</div>
                                <div class="item-header__desc mt-12">Данное массажное кресло предлагает владельцу широкий набор видов массажа, в том числе 3D-массаж спины и ягодиц. Кресло, как и предыдущая модель, оснащено SL-образной кареткой, но механизм состоит из 8 роликов, которые гарантируют эффективный и качественный массаж.</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#A7A1AB"></div>
                                            </div>
                                        </label>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#E3D6B4"></div>
                                            </div>
                                        </label>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#602C10"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <? /*
                            <div class="promo-item__purchase purchase flex">
                                <div class="purchase__wrap">
                                    <div class="purchase__old-price flex --align-center"><s>690 000 Р</s> <span class="purchase__discount">-16%</span></div>
                                    <div class="purchase__price">720 000 Р</div>
                                </div>
                                <div class="purchase__sub-wrap flex">
                                    <? if ($in_cart != true) { ?>
                                        <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                    <? } else { ?>
                                        <div class="product-item__add-btn btn --green --l">В корзине</div>
                                    <? } ?>
                                    <div class="purchase__more-btn btn --l">Подробнее</div>
                                </div>
                            </div>
                            */ ?>
                            <div class="promo-item__specs specs">
                                <div class="specs__title">Технические характеристики:</div>
                                <div class="specs__wrap">
                                    <div class="specs__row">
                                        <div class="specs__name">Материал обивки:</div>
                                        <div class="specs__value">высококачественная искусственная кожа</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Виды массажа:</div>
                                        <div class="specs__value">3D-массаж, комбинированный, постукивающий, похлопывающий, разминающий, Шиацу</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">бедра, голени, ноги, поясница, руки, спина, стопы, ягодицы</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Дополнительные функции:</div>
                                        <div class="specs__value">прогрев, подсветка</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Регулировки: </div>
                                        <div class="specs__value">зона массажа, интенсивность массажа, угол наклона спинки</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Вес пользователя:</div>
                                        <div class="specs__value">до 120 кг</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Режим нулевой гравитации:</div>
                                        <div class="specs__value">Zero G1 и Zero G2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo__item promo-item js-cart-parent">
                            <input type="hidden" class="js-cart-id js-fave-id" value="507149762">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bestseller-tag"><b>хит </b>продаж</div>
                                <div class="promo-item__bg" style="background-color:#F5F4F1;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/casada-betasonic2.webp" type="image/webp">
                                        <img src="/template/dist/img/casada-betasonic2.png" type="image/png" alt="">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">Casada BetaSonic 2</div>
                                <div class="item-header__desc mt-12">Пожалуй лучшее массажное кресло из рассмотренных в этом материале по соотношению цены и доступных функций. Кресло содержит удлинённую SL-каретку на 10-ти роликах, 14 воздушных подушек и систему регулировки под рост пользователя. Три варианта расцветки для любого интерьера.</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#A7A1AB"></div>
                                            </div>
                                        </label>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#E3D6B4"></div>
                                            </div>
                                        </label>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#602C10"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="promo-item__purchase purchase flex">
                                <div class="purchase__wrap">
                                    <div class="purchase__old-price flex --align-center"><s>378 350 Р</s> <span class="purchase__discount">-15%</span></div>
                                    <div class="purchase__price">329 000 Р</div>
                                </div>
                                <div class="purchase__sub-wrap flex">
                                    <? if ($in_cart != true) { ?>
                                    <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                    <? } else { ?>
                                        <div class="product-item__add-btn btn --green --l">В корзине</div>
                                    <? } ?>
                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-betasonic-2-seroye/" class="purchase__more-btn btn --l">Подробнее</a>
                                </div>
                            </div>
                            <div class="promo-item__specs specs">
                                <div class="specs__title">Технические характеристики:</div>
                                <div class="specs__wrap">
                                    <div class="specs__row">
                                        <div class="specs__name">Материал обивки:</div>
                                        <div class="specs__value">искусственная кожа</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Виды массажа:</div>
                                        <div class="specs__value">3D-массаж, массаж Гуаша, постукивающий, похлопывающий, разминающий, растягивающий, массаж Шиацу</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">плечи, руки, спина, стопы, шея, ягодицы, бедра, голень, стопы</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Дополнительные функции:</div>
                                        <div class="specs__value">прогрев, сканирование тела, растяжка</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Регулировки: </div>
                                        <div class="specs__value">зона массажа, интенсивность массажа, угол наклона спинки, подогрев</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Вес пользователя:</div>
                                        <div class="specs__value">до 120 кг</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Режим нулевой гравитации:</div>
                                        <div class="specs__value">Zero-G</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo__item promo-item --big --big-reverse js-cart-parent">
                            <input type="hidden" class="js-cart-id js-fave-id" value="499917711">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F5F5F5 ;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/richter-balance.webp" type="image/webp">
                                        <img src="/template/dist/img/richter-balance.png" type="image/png" alt="">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__content-wrapper">
                                <div class="promo-item__header item-header">
                                    <div class="item-header__title">Richter Balance</div>
                                    <div class="item-header__desc mt-12">Стандартное современное массажное кресло с оптимальным набором функций. Отличается прочностью: выдерживает пользователя весом до 150 кг. Вам будут доступны 12 готовых автоматических программ и 5 слотов для настройки собственных программ массажа.</div>
                                </div>
                                <div class="promo-item__set-color">
                                    <div class="color-pick__wrap flex --align-center">
                                        <div class="color-pick__label --p mr-16">Цвет:</div>
                                        <div class="color-pick__items flex">
                                            <label class="color-item checkbox">
                                                <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                                <div class="color-item__thumb">
                                                    <div class="color-item__color" style="background-color:#A7A1AB"></div>
                                                </div>
                                            </label>
                                            <label class="color-item checkbox">
                                                <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                                <div class="color-item__thumb">
                                                    <div class="color-item__color" style="background-color:#E3D6B4"></div>
                                                </div>
                                            </label>
                                            <label class="color-item checkbox">
                                                <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                                <div class="color-item__thumb">
                                                    <div class="color-item__color" style="background-color:#602C10"></div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="promo-item__purchase purchase flex">
                                    <div class="purchase__wrap">
                                        <div class="purchase__old-price flex --align-center"><s>351 900 Р</s> <span class="purchase__discount">-15%</span></div>
                                        <div class="purchase__price">306 000 Р</div>
                                    </div>
                                    <div class="purchase__sub-wrap flex">
                                        <? if ($in_cart != true) { ?>
                                            <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                        <? } else { ?>
                                            <div class="product-item__add-btn btn --green --l">В корзине</div>
                                        <? } ?>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-richter-balance-terracotta-brown/" class="purchase__more-btn btn --l">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="promo-item__specs specs">
                                <div class="specs__title">Технические характеристики:</div>
                                <div class="specs__wrap">
                                    <div class="specs__row">
                                        <div class="specs__name">Материал обивки:</div>
                                        <div class="specs__value">высококачественная искусственная кожа</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Виды массажа:</div>
                                        <div class="specs__value">воздушно-компрессионный, массаж Шиацу, роликовый, согревающий, 3d-массаж</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">бедра, голени, голова, колени, ноги, плечи, поясница, руки, спина, стопы, шея, ягодицы</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Дополнительные функции:</div>
                                        <div class="specs__value">прогрев, подсветка</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Регулировки: </div>
                                        <div class="specs__value">зона массажа, интенсивность массажа, угол наклона спинки</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Вес пользователя:</div>
                                        <div class="specs__value">до 150 кг</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Режим нулевой гравитации:</div>
                                        <div class="specs__value">Zero-Gravity или Zero-G</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo__item promo-item js-cart-parent">
                            <input type="hidden" class="js-cart-id js-fave-id" value="">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F0EBE5;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/casada-alfasonic2.webp" type="image/webp">
                                        <img src="/template/dist/img/casada-alfasonic2.png" type="image/png" alt="">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">Casada Alphasonic 2</div>
                                <div class="item-header__desc mt-12">Самая дорогая из представленных в нашем обзоре моделей, и, как следствие, с самым широким набором дополнительных возможностей. Встроенная анти-стресс-система, ионизатор воздуха, широкий выбор цветов.</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Heavy-metal">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#1D1D1B"></div>
                                            </div>
                                        </label>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Cape-cod">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#454747"></div>
                                            </div>
                                        </label>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Bone">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#DED4BD"></div>
                                            </div>
                                        </label>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Cherrywood">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#5F1517"></div>
                                            </div>
                                        </label>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Sandal">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#A48771"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="promo-item__purchase purchase flex">
                                <? /*
                                <div class="purchase__wrap">
                                    <div class="purchase__old-price flex --align-center"><s>690 000 Р</s> <span class="purchase__discount">-16%</span></div>
                                    <div class="purchase__price">720 000 Р</div>
                                </div>
                                <div class="purchase__sub-wrap flex">
                                    <? if ($in_cart != true) { ?>
                                        <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                    <? } else { ?>
                                        <div class="product-item__add-btn btn --green --l">В корзине</div>
                                    <? } ?>
                                    <div class="purchase__more-btn btn --l">Подробнее</div>
                                </div>
                                */ ?>
                            </div>
                            <div class="promo-item__specs specs">
                                <div class="specs__title">Технические характеристики:</div>
                                <div class="specs__wrap">
                                    <div class="specs__row">
                                        <div class="specs__name">Материал обивки:</div>
                                        <div class="specs__value">высококлассная искусственная кожа на хлопковой основе</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Виды массажа:</div>
                                        <div class="specs__value">компрессионный, похлопывающий, раскатывающий, постукивающий, разминающий, массаж Шиацу, шведский массаж</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">шея, плечи, руки, спина, поясница, ягодицы, икры, голени, стопы</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Дополнительные функции:</div>
                                        <div class="specs__value">роликовый массаж стоп, прогрев, растяжка, ионизатор воздуха</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Регулировки: </div>
                                        <div class="specs__value">зона массажа, интенсивность массажа, угол наклона спинки</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Вес пользователя:</div>
                                        <div class="specs__value">до 120 кг</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Режим нулевой гравитации:</div>
                                        <div class="specs__value">Zero G2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo__item promo-item js-cart-parent">
                            <input type="hidden" class="js-cart-id js-fave-id" value="489766682">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F5F4F1;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/fujimo-qi.webp" type="image/webp">
                                        <img src="/template/dist/img/fujimo-qi.png" type="image/png" alt="">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">FUJIMO Qi F-633</div>
                                <div class="item-header__desc mt-12">Каретка данной модели имеет SL-образную форму, длину 126 см и 6 роликов. Интересная особенность: выдвижная подставка для ног 18 см. Она позволяет настроить кресло под ваш рост максимально точно.</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Mongoose">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#B79578"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="promo-item__purchase purchase flex">
                                <div class="purchase__wrap">
                                    <div class="purchase__old-price flex --align-center"><s>378 350 Р</s> <span class="purchase__discount">-15%</span></div>
                                    <div class="purchase__price">329 000 Р</div>
                                </div>
                            <div class="purchase__sub-wrap flex">
                                    <? if ($in_cart != true) { ?>
                                    <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                    <? } else { ?>
                                        <div class="product-item__add-btn btn --green --l">В корзине</div>
                                    <? } ?>
                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-fujimo-qi-f-633-2020-design-grafit/" class="purchase__more-btn btn --l">Подробнее</a>
                                </div>
                            </div>
                            <div class="promo-item__specs specs">
                                <div class="specs__title">Технические характеристики:</div>
                                <div class="specs__wrap">
                                    <div class="specs__row">
                                        <div class="specs__name">Материал обивки:</div>
                                        <div class="specs__value">высококлассная искусственная кожа</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Виды массажа:</div>
                                        <div class="specs__value">компрессионный, похлопывающий, раскатывающий, постукивающий, разминающий, массаж Шиацу, шведский массаж</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">шея, плечи, руки, спина, поясница, ягодицы, икры, голени, стопы</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Дополнительные функции:</div>
                                        <div class="specs__value">роликовый массаж стоп, прогрев, растяжка</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Регулировки: </div>
                                        <div class="specs__value">зона массажа, интенсивность массажа, угол наклона спинки</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Вес пользователя:</div>
                                        <div class="specs__value">до 100 кг</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Режим нулевой гравитации:</div>
                                        <div class="specs__value">Zero-G</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo__item promo-item --big js-cart-parent">
                            <input type="hidden" class="js-cart-id js-fave-id" value="">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F5F5F5 ;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/ergonova-organic-4.webp" type="image/webp">
                                        <img src="/template/dist/img/ergonova-organic-4.png" type="image/png" alt="">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__content-wrapper">
                                <div class="promo-item__header item-header">
                                    <div class="item-header__title">Ergonova Organic 4 PM</div>
                                    <div class="item-header__desc mt-12">Данная модель оснащена длинной L-образной кареткой (127 см), удлиненной секцией для ног с возможностью регулировки. Система содержит 10 автоматических программ, которые удовлетворят абсолютно любой запрос, а также все необходимые функции.</div>
                                </div>
                                <div class="promo-item__set-color mt-24">
                                    <div class="color-pick__wrap flex --align-center">
                                        <div class="color-pick__label --p mr-16">Цвет:</div>
                                        <div class="color-pick__items flex">
                                            <label class="color-item checkbox">
                                                <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Muddy-waters">
                                                <div class="color-item__thumb">
                                                    <div class="color-item__color" style="background-color:#C09374"></div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <? /*
                                <div class="promo-item__purchase purchase flex">
                                    <div class="purchase__wrap">
                                        <div class="purchase__old-price flex --align-center"><s>690 000 Р</s> <span class="purchase__discount">-16%</span></div>
                                        <div class="purchase__price">720 000 Р</div>
                                    </div>
                                    <div class="purchase__sub-wrap flex">
                                        <div class="purchase__cart-add-btn btn --fill-1 --l">В корзину</div>
                                        <div class="purchase__more-btn btn --l">Подробнее</div>
                                    </div>
                                </div>
                                */ ?>
                            </div>
                            <div class="promo-item__specs specs">
                                <div class="specs__title">Технические характеристики:</div>
                                <div class="specs__wrap">
                                    <div class="specs__row">
                                        <div class="specs__name">Материал обивки:</div>
                                        <div class="specs__value">искусственная кожа высшей категории</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Виды массажа:</div>
                                        <div class="specs__value">3d-массаж, компрессионный, похлопывающий, раскатывающий, постукивающий, разминающий, массаж Шиацу, шведский массаж, ручной режим</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">руки, шея, плечи, поясница, ягодицы, бедра</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Дополнительные функции:</div>
                                        <div class="specs__value">роликовый массаж стоп, прогрев, растяжка</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Регулировки: </div>
                                        <div class="specs__value">зона массажа, интенсивность массажа, угол наклона спинки, подогрев</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Вес пользователя:</div>
                                        <div class="specs__value">до 120 кг</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Режим нулевой гравитации:</div>
                                        <div class="specs__value">Zero-G</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo__item promo-item js-cart-parent">
                            <input type="hidden" class="js-cart-id js-fave-id" value="489494493">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F0EBE5;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/sensa-smart.webp" type="image/webp">
                                        <img src="/template/dist/img/sensa-smart.png" type="image/png" alt="">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">Sensa Smart M</div>
                                <div class="item-header__desc mt-12">Компактная и недорогая модель, которая отлично подойдет для небольших помещений. Несмотря на небольшой размер, модель предложит пользователю полноценный набор функционала: отлично проработанный воздушно-компрессионный массаж всего тела, роликовый массаж.</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Maize">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#F4CAA4"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="promo-item__purchase purchase flex">
                                <div class="purchase__wrap">
                                    <div class="purchase__old-price flex --align-center"><s>338 100 Р</s> <span class="purchase__discount">-15%</span></div>
                                    <div class="purchase__price">294 000 Р</div>
                                </div>
                                <div class="purchase__sub-wrap flex">
                                    <? if ($in_cart != true) { ?>
                                        <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                    <? } else { ?>
                                        <div class="product-item__add-btn btn --green --l">В корзине</div>
                                    <? } ?>
                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-sensa-smart-m-brown-grey-/" class="purchase__more-btn btn --l">Подробнее</a>
                                </div>
                            </div>
                            <div class="promo-item__specs specs">
                                <div class="specs__title">Технические характеристики:</div>
                                <div class="specs__wrap">
                                    <div class="specs__row">
                                        <div class="specs__name">Материал обивки:</div>
                                        <div class="specs__value">искусственная кожа</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Виды массажа:</div>
                                        <div class="specs__value">компрессионный, похлопывающий, раскатывающий, постукивающий, разминающий, массаж Шиацу</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">руки, шея, плечи, поясница, ягодицы, бедра</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Дополнительные функции:</div>
                                        <div class="specs__value">роликовый массаж стоп, прогрев, растяжка, сканирование тела</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Регулировки: </div>
                                        <div class="specs__value">зона массажа, интенсивность массажа, угол наклона спинки, подогрев</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Вес пользователя:</div>
                                        <div class="specs__value">до 120 кг</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Режим нулевой гравитации:</div>
                                        <div class="specs__value">Zero G2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo__item promo-item js-cart-parent">
                            <input type="hidden" class="js-cart-id js-fave-id" value="501462632">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F5F4F1;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/rovos-652l.webp" type="image/webp">
                                        <img src="/template/dist/img/rovos-652l.png" type="image/png" alt="">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">ROVOS R652L</div>
                                <div class="item-header__desc mt-12">Самая бюджетная модель из представленных на этой странице. Роликовый механизм имеет L-образную форму и содержит 4 пары роликов. Кресло предлагает владельцу механизм с 4 роликами, 10 автоматических режимов, электронное управление с помощью пульта.</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Quill-gray">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#DDDCDA"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="promo-item__purchase purchase flex">
                                <div class="purchase__wrap">
                                    <div class="purchase__old-price flex --align-center"><s>217 350 Р</s> <span class="purchase__discount">-15%</span></div>
                                    <div class="purchase__price">189 000 Р</div>
                                </div>
                                <div class="purchase__sub-wrap flex">
                                    <? if ($in_cart != true) { ?>
                                        <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                    <? } else { ?>
                                        <div class="product-item__add-btn btn --green --l">В корзине</div>
                                    <? } ?>
                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-rovos-r652l-gray/" class="purchase__more-btn btn --l">Подробнее</a>
                                </div>
                            </div>
                            <div class="promo-item__specs specs">
                                <div class="specs__title">Технические характеристики:</div>
                                <div class="specs__wrap">
                                    <div class="specs__row">
                                        <div class="specs__name">Материал обивки:</div>
                                        <div class="specs__value">искусственная кожа</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Виды массажа:</div>
                                        <div class="specs__value">раскатывающий, постукивающий, разминающий, массаж Шиацу, растирающий массаж Гуаша</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">плечи, поясница, руки, спина, бедра, икры, лодыжки, ступни, талия, шея, ягодицы</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Дополнительные функции:</div>
                                        <div class="specs__value">роликовый массаж стоп, прогрев, растяжка</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Регулировки: </div>
                                        <div class="specs__value">зона массажа, интенсивность массажа, угол наклона спинки</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Вес пользователя:</div>
                                        <div class="specs__value">до 120 кг</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Режим нулевой гравитации:</div>
                                        <div class="specs__value">Zero-G</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
		<div class="content__carosusel-wrap col --12 mt-128">
			<?php 
				$more_btn = '/catalog/massazhnye-kresla/';
				$carusel = $recomendation;
				include($_SERVER['DOCUMENT_ROOT'].'/template/comp/products-carousel/__products-carousel.php');
			?>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>