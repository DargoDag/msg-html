<?php
    $api_url = 'http://'.$_SERVER['HTTP_HOST'];
    define("API", $api_url);
    $breadcrumbs = [
        [
            "name"=>"Блог",
            "link"=> "/blog/"
        ],
        [
            "name"=> 'ТОП 10 популярных массажеров 2021 г.',
            "link"=> null
        ]
    ];
	$meta__title = "top-10-popularnih-massagerov-2021";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier = "--banner";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap --promo --top-10">
	<div class="content__page-banner --promo --promo-new">
		<div class="content__banner-wrap">
			<div class="center-wrap">
				<div class="content__banner-sub-wrap">
					<h1 class="content__banner-title">ТОП 10 популярных массажеров 2021 г.</h1>
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
            Отличие массажных кресел от обычных в том, что они хорошо снимают напряжение с мышц рук, шеи, спин и ног после тяжелого дня. Некоторые люди склонны верить, что даже самое мощное и современное кресло не заменит массажиста. Другие же, наоборот, покупаю медтехнику для того, чтобы экономить время и средства. <br>Современные производители стараются внедрить как можно больше полезных функций, которые направлены на снятие боли, напряжения и усталости со всего тела. Если вы тоже хотите приобрести кресло, но не знаете, на какой модели остановиться, советуем обратить внимание на наш рейтинг. Ниже мы представляем ТОП-10 популярных кресел прошлого года. В список попали модели, которые разнятся ценой, брендом и набором функций. 
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
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-alphasonic-2-kremovo-korichnevyy/" class="catalog-item__title link h5">Casada Aplhasonic 2</a>
                                                    <div class="catalog-item__descr">Роскошное массажное кресло, концепция элегантности и простоты.</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-alphasonic-2-kremovo-korichnevyy/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-alphasonic-2-kremovo-korichnevyy/" class="catalog-item__bg link">
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
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-skyliner-2-chernyy/" class="catalog-item__title link h5">Casada Skyliner 2</a>
                                                    <div class="catalog-item__descr">Умный целитеть вашего тела</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-skyliner-2-chernyy/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-skyliner-2-chernyy/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/casada-skyliner-2-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/casada-skyliner-2-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-ohco-m-8-pearl/" class="catalog-item__title link h5">Ohco M.8</a>
                                                    <div class="catalog-item__descr">Массаж от шеи до бедер</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-ohco-m-8-pearl/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-ohco-m-8-pearl/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/ohco-1-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/ohco-1-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-kern-red/" class="catalog-item__title link h5">Bodo Kern Red</a>
                                                    <div class="catalog-item__descr">Массажное кресло нового поколения</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-kern-red/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-kern-red/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/bodo-kern-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/bodo-kern-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-richter-alpine-brown/" class="catalog-item__title link h5">Richter Alpine Brown</a>
                                                    <div class="catalog-item__descr">Кресло с широким набором дополнительных возможностей</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-richter-alpine-brown/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-richter-alpine-brown/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/richter-brown-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/richter-brown-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-rovos-r657l-cream/" class="catalog-item__title link h5">Rovos R657l</a>
                                                    <div class="catalog-item__descr">Умный целитеть вашего тела</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-rovos-r657l-cream/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-rovos-r657l-cream/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/rovos-657l-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/rovos-657l-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-palladium-bordeaux/" class="catalog-item__title link h5">Bodo Palladium</a>
                                                    <div class="catalog-item__descr">Удовлетворяет абсолютно любые запросы</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-palladium-bordeaux/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-palladium-bordeaux/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/bodo-palladium-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/bodo-palladium-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-ogawa-smart-craft-pro-og7208/" class="catalog-item__title link h5">Ogawa Smart Craft Pro</a>
                                                    <div class="catalog-item__descr">Лучший вариант для небольшого помещения</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-ogawa-smart-craft-pro-og7208/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-ogawa-smart-craft-pro-og7208/" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/ogawa-1-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/ogawa-1-carusel.png" type="image/png">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="catalog-item --small">
                                        <div class="catalog-item__wrap flex --direction-column --just-space">
                                            <div class="catalog-item__info">
                                                <div class="catalog-item__title-wrap">
                                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-fujimo-qi-f-633-2020-design-grafit/" class="catalog-item__title link h5">FUJIMO Qi F633</a>
                                                    <div class="catalog-item__descr">Лучший вариант для небольшого помещения</div>
                                                </div>
                                            </div>
                                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-fujimo-qi-f-633-2020-design-grafit/" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-fujimo-qi-f-633-2020-design-grafit/" class="catalog-item__bg link">
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
                                                    <a href="#" class="catalog-item__title link h5">ERGONOVA FullBody SE</a>
                                                    <div class="catalog-item__descr">Массаж от шеи до бедер</div>
                                                </div>
                                            </div>
                                            <a href="#" class="catalog-item__more-btn btn">
                                                <div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
                                            </a>
                                        </div>
                                        <a href="#" class="catalog-item__bg link">
                                            <picture class="catalog-item__bg-thumb lazy">
                                                <source srcset="/template/dist/img/ergonova-fullBody-carusel.webp" type="image/webp">
                                                <source srcset="/template/dist/img/ergonova-fullBody-carusel.png" type="image/png">
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
                            <input type="hidden" class="js-cart-id js-fave-id" value="499936391">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F5F5F5;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/casada-alfasonic2.webp" type="image/webp">
                                        <img src="/template/dist/img/casada-alfasonic2.png" type="image/png" alt="#">
                                    </picture>
                                </div>
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>
                            </div>
                            <div class="promo-item__content-wrapper">
                                <div class="promo-item__header item-header">
                                    <div class="item-header__title">Casada Aplhasonic 2</div>
                                    <div class="item-header__desc mt-12">Уникальность модели в том, что с ее помощью можно сделать массаж любой зоны, который будет очень похож на профессиональный. Кресло, которое используют в домашних условиях, завоевало доверие большого количества пользователей разных возрастов. Благодаря тому, что оно легко раскладывается, кресло не занимает много места. Рекомендуется к использованию для того, чтобы абстрагироваться от стресса, сконцентрироваться, перезарядиться, хорошо расслабиться после насыщенного дня.</div>
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
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-alphasonic-2-kremovo-korichnevyy/" class="purchase__more-btn btn --l">Подробнее</a>
                                    </div>
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
                                        <div class="specs__value">Разминание, Воздушно-компрессионный массаж, Растягивание, Акупунктура, Растирание, Точечный массаж, Массаж Шиацу, Роликовый массаж, Комбинированный, Инфракрасное прогревание</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">Бедра, Икры, Лодыжки, Плечи, Поясница, Руки, Спина, Ступни, Талия, Шея, Ягодицы</div>
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
                            <input type="hidden" class="js-cart-id js-fave-id" value="489186074">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F0EBE5;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/casada-skyliner-2.webp" type="image/webp">
                                        <img src="/template/dist/img/casada-skyliner-2.png" type="image/png" alt="#">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">Casada SkyLiner 2</div>
                                <div class="item-header__desc mt-12">Кресло Casada SkyLiner II пользовалось большим спросом в 2021 году. Оно отличается невероятным функционалом и многообразными массажными техниками. В основе разработки аппарата лежат современные достижения, которые гарантируют высокую эффективность и качество массажа. Помимо непревзойденного внешнего вида прибор радует оздоровительным эффектом. Он массажирует все тело, позволяет расслабиться и приятно провести время с пользой для организма.</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Белый">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#fff"></div>
                                            </div>
                                        </label>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Черный">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#1D1D1B"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
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
                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-skyliner-2-chernyy/" class="purchase__more-btn btn --l">Подробнее</a>
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
                                        <div class="specs__value">Разминание, Постукивание, Похлопывание, Воздушно-компрессионный массаж, Скручивание, Растягивание, Акупунктура, Растирание, Точечный массаж, Массаж Шиацу, Роликовый массаж, Комбинированный, Инфракрасное прогревание</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">Бедра, Икры, Лодыжки, Плечи, Поясница, Руки, Спина, Ступни, Талия, Шея, Ягодицы</div>
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
                            <input type="hidden" class="js-cart-id js-fave-id" value="489317339">
                            <div class="promo-item__wrap">
                                <!-- <div class="promo-item__bestseller-tag"><b>хит </b>продаж</div> -->
                                <div class="promo-item__bg" style="background-color:#F5F4F1;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/ohco-1.webp" type="image/webp">
                                        <img src="/template/dist/img/ohco-1.png" type="image/png" alt="#">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">OHCO M.8</div>
                                <div class="item-header__desc mt-12">Воздействуя на определенные точки тела, массажное кресло Ohco m.8 прорабатывает и расслабляет мышцы, а также восстанавливает энергию и гармонию. Прибор вполне заслуженно попал в десятку. Он представляет собой комфортное и стильное кресло, которое оснащено большим набором функций. Уникальные дверцы-подлокотники буквально «обнимают» человека, создавая уютную атмосферу. После массажа на таком кресле вы точно почувствуете себя отдохнувшим и обновленным</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Pearl">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#eae0c8"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="promo-item__purchase purchase flex">
                                <div class="purchase__wrap">
                                    <div class="purchase__old-price flex --align-center"><s>1 265 000 Р</s> <span class="purchase__discount">-15%</span></div>
                                    <div class="purchase__price">1 100 000 Р</div>
                                </div>
                                <div class="purchase__sub-wrap flex">
                                    <? if ($in_cart != true) { ?>
                                    <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                    <? } else { ?>
                                        <div class="product-item__add-btn btn --green --l">В корзине</div>
                                    <? } ?>
                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-ohco-m-8-pearl/" class="purchase__more-btn btn --l">Подробнее</a>
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
                                        <div class="specs__value">Разминание, Постукивание, Похлопывание, Воздушно-компрессионный массаж, Скручивание, Растягивание, Акупунктура, Растирание, Точечный массаж, Массаж Шиацу, Роликовый массаж, Комбинированный, Инфракрасное прогревание</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">Бедра, Икры, Лодыжки, Плечи, Поясница, Руки, Спина, Ступни, Талия, Шея, Ягодицы</div>
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
                            <input type="hidden" class="js-cart-id js-fave-id" value="499367093">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F5F5F5 ;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/bodo-kern.webp" type="image/webp">
                                        <img src="/template/dist/img/bodo-kern.png" type="image/png" alt="#">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__content-wrapper">
                                <div class="promo-item__header item-header">
                                    <div class="item-header__title">Bodo kern Red</div>
                                    <div class="item-header__desc mt-12">Уникальное кресло Bodo Kern обладает функцией 3D массажа, L-образной кареткой и нулевой гравитацией. Пользователю предлагается 13 программ на выбор. Из них 3 программы специализируются на 3D массаже. Это значит, что во время массажа можно изменять силу, с которой давят ролики. Так мышцы прорабатываются максимально эффективно и глубоко. Ролики двигаются в соответствии с физиологическими изгибами тела, охватывая большую поверхность спины. Помимо уникальной «начинки» прибор радует современным и стильным внешним видом.</div>
                                </div>
                                <div class="promo-item__set-color">
                                    <div class="color-pick__wrap flex --align-center">
                                        <div class="color-pick__label --p mr-16">Цвет:</div>
                                        <div class="color-pick__items flex">
                                            <label class="color-item checkbox">
                                                <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Красный">
                                                <div class="color-item__thumb">
                                                    <div class="color-item__color" style="background-color:#E50005"></div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="promo-item__purchase purchase flex">
                                    <div class="purchase__wrap">
                                        <div class="purchase__old-price flex --align-center"><s>593 400 Р</s> <span class="purchase__discount">-15%</span></div>
                                        <div class="purchase__price">516 000 Р</div>
                                    </div>
                                    <div class="purchase__sub-wrap flex">
                                        <? if ($in_cart != true) { ?>
                                            <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                        <? } else { ?>
                                            <div class="product-item__add-btn btn --green --l">В корзине</div>
                                        <? } ?>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-kern-red/" class="purchase__more-btn btn --l">Подробнее</a>
                                    </div>
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
                                        <div class="specs__value">Разминание, Воздушно-компрессионный массаж, Растягивание, Акупунктура, Растирание, Точечный массаж, Массаж Шиацу, Роликовый массаж, Комбинированный, Инфракрасное прогревание</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">Бедра, Икры, Лодыжки, Плечи, Поясница, Руки, Спина, Ступни, Талия, Шея, Ягодицы</div>
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
                            <input type="hidden" class="js-cart-id js-fave-id" value="499591646">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F0EBE5;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/richter-brown.webp" type="image/webp">
                                        <img src="/template/dist/img/richter-brown.png" type="image/png" alt="#">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">Richter Alpine Brown</div>
                                <div class="item-header__desc mt-12">Кресло Richter Alpine является современным, функциональным и элегантным прибором, которое настолько пришлось по душе пользователям, что просто обязано быть в десятке лучших. Прибор оснащен супер длинной и комфортной кареткой, а также механизмом для 3D массажа. Покупая такое кресло, вы не только получаете стильный предмет интерьера, но и устройство для оздоровления в домашних условиях.</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Heavy-metal">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#564043"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="promo-item__purchase purchase flex">
                                <div class="purchase__wrap">
                                    <div class="purchase__old-price flex --align-center"><s>566 950 Р</s> <span class="purchase__discount">-16%</span></div>
                                    <div class="purchase__price">493 000 Р</div>
                                </div>
                                <div class="purchase__sub-wrap flex">
                                    <? if ($in_cart != true) { ?>
                                        <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                    <? } else { ?>
                                        <div class="product-item__add-btn btn --green --l">В корзине</div>
                                    <? } ?>
                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-richter-alpine-brown/" class="purchase__more-btn btn --l">Подробнее</a>
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
                                        <div class="specs__value">Разминание, Постукивание, Воздушно-компрессионный массаж, Растягивание, Акупунктура, Растирание, Точечный массаж, Массаж Шиацу, Роликовый массаж, Комбинированный, Инфракрасное прогревание</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">Бедра, Икры, Лодыжки, Плечи, Поясница, Руки, Спина, Ступни, Талия, Шея, Ягодицы</div>
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
                                        <div class="specs__value">Zero G1</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo__item promo-item js-cart-parent">
                            <input type="hidden" class="js-cart-id js-fave-id" value="501466822">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F5F4F1;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/880747607_massazhnoe-kreslo-rovos.webp" type="image/webp">
                                        <img src="/template/dist/img/880747607_massazhnoe-kreslo-rovos.jpg" type="image/png" alt="">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">Rovos R657l</div>
                                <div class="item-header__desc mt-12">Кресло Rovos 657l тоже может удивить. Его особенность в 12-ти техниках, которые легко реализовываются в домашних условиях. С таким прибором пользователю доступны все популярные виды массажа, включая мягкий, тайский, освежающий, деликатный, основной и спортивный. Прибор эффективно воздействует на плечи, пояс, шею и позвоночник.</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Cream">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#D0C8BE"></div>
                                            </div>
                                        </label>
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Brown">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#564043"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="promo-item__purchase purchase flex">
                                <div class="purchase__wrap">
                                    <div class="purchase__old-price flex --align-center"><s>274 850 Р</s> <span class="purchase__discount">-15%</span></div>
                                    <div class="purchase__price">239 000 Р</div>
                                </div>
                            <div class="purchase__sub-wrap flex">
                                    <? if ($in_cart != true) { ?>
                                    <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                    <? } else { ?>
                                        <div class="product-item__add-btn btn --green --l">В корзине</div>
                                    <? } ?>
                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-rovos-r657l-cream/" class="purchase__more-btn btn --l">Подробнее</a>
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
                                        <div class="specs__value">Разминание, Постукивание, Похлопывание, Воздушно-компрессионный массаж, Растягивание, Акупунктура, Точечный массаж, Массаж Шиацу, Роликовый массаж, Комбинированный, Инфракрасное прогревание</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">Бедра, Икры, Лодыжки, Плечи, Поясница, Руки, Спина, Ступни, Талия, Шея, Ягодицы</div>
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
                            <input type="hidden" class="js-cart-id js-fave-id" value="499401300">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F5F5F5;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/bodo-palladium.webp" type="image/webp">
                                        <img src="/template/dist/img/bodo-palladium.png" type="image/png" alt="#">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__content-wrapper">
                                <div class="promo-item__header item-header">
                                    <div class="item-header__title">Bodo Palladium</div>
                                    <div class="item-header__desc mt-12">Массажное кресло Bodo Palladium представляет собой функциональное и современное устройство, которое хорошо массажирует все тело в домашних условиях. Его выбирают из-за удлиненной каретки, оснащенной механизмом для 3D массажа. У пользователя есть возможность делать тщательный и глубокий массаж, полностью расслабляясь и снимая напряжение.</div>
                                </div>
                                <div class="promo-item__set-color mt-24">
                                    <div class="color-pick__wrap flex --align-center">
                                        <div class="color-pick__label --p mr-16">Цвет:</div>
                                        <div class="color-pick__items flex">
                                            <label class="color-item checkbox">
                                                <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Bordeaux">
                                                <div class="color-item__thumb">
                                                    <div class="color-item__color" style="background-color:#800000"></div>
                                                </div>
                                            </label>
                                            <label class="color-item checkbox">
                                                <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Grey">
                                                <div class="color-item__thumb">
                                                    <div class="color-item__color" style="background-color:#858585"></div>
                                                </div>
                                            </label>
                                            <label class="color-item checkbox">
                                                <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Blue">
                                                <div class="color-item__thumb">
                                                    <div class="color-item__color" style="background-color:#98AEB6"></div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="promo-item__purchase purchase flex">
                                    <div class="purchase__wrap">
                                        <div class="purchase__old-price flex --align-center"><s>778 550 Р</s> <span class="purchase__discount">-15%</span></div>
                                        <div class="purchase__price">720 000 Р</div>
                                    </div>
                                    <div class="purchase__sub-wrap flex">
                                        <? if ($in_cart != true) { ?>
                                        <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                        <? } else { ?>
                                            <div class="product-item__add-btn btn --green --l">В корзине</div>
                                        <? } ?>
                                        <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-bodo-palladium-bordeaux/" class="purchase__more-btn btn --l">Подробнее</a>
                                    </div>
                                </div>
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
                                        <div class="specs__value">Разминание, Постукивание, Похлопывание, Воздушно-компрессионный массаж, Скручивание, Растягивание, Акупунктура, Растирание, Точечный массаж, Массаж Шиацу, Роликовый массаж, Комбинированный, Инфракрасное прогревание</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">Бедра, Икры, Лодыжки, Плечи, Поясница, Руки, Спина, Ступни, Талия, Шея, Ягодицы</div>
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
                            <input type="hidden" class="js-cart-id js-fave-id" value="489499555">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F0EBE5;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/ogawa-1.webp" type="image/webp">
                                        <img src="/template/dist/img/ogawa-1.png" type="image/png" alt="#">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">Ogawa Smart Craft Pro</div>
                                <div class="item-header__desc mt-12">Кресло Ogawa Smart Craft Pro копирует движения массажиста. В связи с этим прибор способствует быстрому восстановлению энергетического баланса в организме пользователя. Модель полностью соответствует своей цене, предлагая целый набор функций и техник, которые становятся альтернативой посещения массажного салона. Производитель гармонично соединил практики медицины Древнего востока с технологическими инновациями. Также в приборе предусмотрены комбинации эффективных методов массажа, направленных на оздоровление. Фишкой кресла является микропроцессор A.R.M., который считается самым производительным среди остальных.</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Brown">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#564043"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="promo-item__purchase purchase flex">
                                <div class="purchase__wrap">
                                    <div class="purchase__old-price flex --align-center"><s>573 850 Р</s> <span class="purchase__discount">-15%</span></div>
                                    <div class="purchase__price">499 000 Р</div>
                                </div>
                                <div class="purchase__sub-wrap flex">
                                    <? if ($in_cart != true) { ?>
                                        <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                    <? } else { ?>
                                        <div class="product-item__add-btn btn --green --l">В корзине</div>
                                    <? } ?>
                                    <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-ogawa-smart-craft-pro-og7208/" class="purchase__more-btn btn --l">Подробнее</a>
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
                                        <div class="specs__value">Разминание, Постукивание, Воздушно-компрессионный массаж, Шведский массаж, Растягивание, Акупунктура, Точечный массаж, Массаж Шиацу, Роликовый массаж, Комбинированный, Инфракрасное прогревание</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">Бедра, Икры, Лодыжки, Плечи, Поясница, Руки, Спина, Ступни, Талия, Шея, Ягодицы</div>
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
                            <input type="hidden" class="js-cart-id js-fave-id" value="489766682">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F5F4F1;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/fujimo-1.webp" type="image/webp">
                                        <img src="/template/dist/img/fujimo-1.png" type="image/png" alt="#">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">FUJIMO QI F-633</div>
                                <div class="item-header__desc mt-12">Массажное кресло Fujimo qi f-633 – прогрессивное оборудование, которое создано лидером аппаратной массажной индустрии, имеющим мировую репутацию. Здесь сосредоточены разработки ученых Японии и знания классической медицины Востока. Достаточно установить такое кресло дома, чтобы превратить одну комнату в целый салон. С таким прибором можно легко и быстро получать лечебные и профилактические процедуры, расслабляться, избавляться от напряжения в мышцах и кайфовать. Отметим, что кроме покупки кресла пользователь больше не несет никаких расходов. Он может улучшать свое здоровье в удобное для него время без привлечения сторонних людей или финансовых расходов. Более того, несмотря на наличие многих техник Востока, модель относится к разряду недорогих.</div>
                            </div>
                            <div class="promo-item__set-color mt-24">
                                <div class="color-pick__wrap flex --align-center">
                                    <div class="color-pick__label --p mr-16">Цвет:</div>
                                    <div class="color-pick__items flex">
                                        <label class="color-item checkbox">
                                            <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Graphite">
                                            <div class="color-item__thumb">
                                                <div class="color-item__color" style="background-color:#222"></div>
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
                                        <div class="specs__value">искусственная кожа</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Виды массажа:</div>
                                        <div class="specs__value">Разминание, Постукивание, Похлопывание, Воздушно-компрессионный массаж, Растягивание, Акупунктура, Растирание, Массаж Шиацу, Роликовый массаж, Комбинированный, Инфракрасное прогревание</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">Бедра, Икры, Лодыжки, Плечи, Поясница, Руки, Спина, Ступни, Талия, Шея, Ягодицы</div>
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
                        <div class="promo__item promo-item js-cart-parent">
                            <input type="hidden" class="js-cart-id js-fave-id" value="489766682">
                            <div class="promo-item__wrap">
                                <div class="promo-item__bg" style="background-color:#F5F4F1;"></div>
                                <div class="promo-items__img">
                                    <picture>
                                        <source srcset="/template/dist/img/ergonova-fullBody.webp" type="image/webp">
                                        <img src="/template/dist/img/ergonova-fullBody.png" type="image/png" alt="">
                                    </picture>
                                </div>       
                                <div class="product-item__sales-tag">Акция</div>
                                <div class="product-item__new-tag">Новинка</div>         
                            </div>
                            <div class="promo-item__header item-header">
                                <div class="item-header__title">Ergonova FullBody SE</div>
                                <div class="item-header__desc mt-12">Массажное кресло Ergonova FullBody SE — великолепный выбор для массажа всего тела. В нем собраны все самые эффективные функции, обеспечивающие максимальное расслабление и VIP комфорт.</div>
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
                            <!-- <div class="promo-item__purchase purchase flex">
                                <div class="purchase__wrap">
                                    <div class="purchase__old-price flex --align-center"><s>723 350 Р</s> <span class="purchase__discount">-15%</span></div>
                                    <div class="purchase__price">629 000 Р</div>
                                </div>
                            <div class="purchase__sub-wrap flex">
                                    <? if ($in_cart != true) { ?>
                                    <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                                    <? } else { ?>
                                        <div class="product-item__add-btn btn --green --l">В корзине</div>
                                    <? } ?>
                                    <a href="#" class="purchase__more-btn btn --l">Подробнее</a>
                                </div>
                            </div> -->
                            <div class="promo-item__specs specs">
                                <div class="specs__title">Технические характеристики:</div>
                                <div class="specs__wrap">
                                    <div class="specs__row">
                                        <div class="specs__name">Материал обивки:</div>
                                        <div class="specs__value">искусственная кожа</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Виды массажа:</div>
                                        <div class="specs__value">роликовый, воздушно-компрессионный, разминающий, поколачивающий, Шиацу, растягивающий, постукивание, согревающий, 4D массаж</div>
                                    </div>
                                    <div class="specs__row">
                                        <div class="specs__name">Области массажа: </div>
                                        <div class="specs__value">икры, стопы, руки, шея, талия, спина, плечи, поясница, ягодицы, бедра</div>
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
                                        <div class="specs__value">до 130 кг</div>
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