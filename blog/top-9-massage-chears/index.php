<?php
    $api_url = 'http://'.$_SERVER['HTTP_HOST'];
    define("API", $api_url);
    $breadcrumbs = [
        [
            "name"=>"Блог",
            "link"=> "/blog/"
        ],
        [
            "name"=> 'ТОП 9 массажных кресел 2021',
            "link"=> null
        ]
    ];
	$meta__title = "top-9-massage-chears";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-48">
	<div class="center-wrap">
        <div class="promo">
            <div class="promo__cards --top9">
                <div class="promo__item promo-item --big js-cart-parent">
                    <input type="hidden" class="js-cart-id js-fave-id" value="499392950">
                    <div class="promo-item__wrap">
                        <div class="promo-item__bg" style="background-color:#F5F5F5 ;"></div>
                        <div class="promo-items__img">
                            <picture>
                                <source srcset="/template/dist/img/casada-skyliner-2.webp" type="image/webp">
                                <img src="/template/dist/img/casada-skyliner-2.png" type="image/png" alt="">
                            </picture>
                        </div>
                        <div class="product-item__sales-tag">Акция</div>
                        <div class="product-item__new-tag">Новинка</div>
                    </div>
                    <div class="promo-item__content-wrapper">
                        <div class="promo-item__header item-header">
                            <div class="item-header__title">SkyLiner 2</div>
                            <div class="item-header__desc mt-12">Кресло Casada SkyLiner 2 (Скайлайнер 2) вобрало в себя последние тенденции и разработки в области массажного оборудования. Филигранный массаж, Углеродно-инфракрасный прогрев, система Braintronics,- все эти функции обеспечивают комфорт и приятные ощущения.</div>
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
                                        <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Черный">
                                        <div class="color-item__thumb">
                                            <div class="color-item__color" style="background-color:#000"></div>
                                        </div>
                                    </label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="promo-item__purchase purchase flex">
                            <div class="purchase__wrap">
                                <div class="purchase__old-price flex --align-center"><s>862 385 Р</s> <span class="purchase__discount">-15%</span></div>
                                <div class="purchase__price">749 900 Р</div>
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
                                <img src="/template/dist/img/casada-aura.png" type="image/png" alt="#">
                            </picture>
                        </div>       
                        <div class="product-item__sales-tag">Акция</div>
                        <div class="product-item__new-tag">Новинка</div>         
                    </div>
                    <div class="promo-item__header item-header">
                        <div class="item-header__title">Casada aura</div>
                        <div class="item-header__desc mt-12">Массажное кресло оснащено новой технологией 4D массажа в сочетании с усовершенствованной SL-кареткой для глубокого массажа от шейно-воротниковой зоны до нижней части бедер. Сочетание роликов с подогревом и 64-х двухслойных компрессионных подушек, дает максимально реалистичный эффект прикосновения рук массажиста и эффект массажа теплыми камнями.</div>
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
                            <div class="purchase__old-price flex --align-center"><s>678 385 Р</s> <span class="purchase__discount">-16%</span></div>
                            <div class="purchase__price">589 900 Р</div>
                        </div>
                        <div class="purchase__sub-wrap flex">
                            <? if ($in_cart != true) { ?>
                                <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                            <? } else { ?>
                                <div class="product-item__add-btn btn --green --l">В корзине</div>
                            <? } ?>
                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-casada-aura-seryy/" class="purchase__more-btn btn --l">Подробнее</a>
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
                                <div class="specs__value">Бедра, Икры, Лодыжки, Плечи, Поясница, Руки, Спина, Ступни, Талия, Шея</div>
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
                                <div class="specs__value">Zero G</div>
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
                                <source srcset="/template/dist/img/bodo-excellence.webp" type="image/webp">
                                <img src="/template/dist/img/bodo-excellence.png" type="image/png" alt="">
                            </picture>
                        </div>       
                        <div class="product-item__sales-tag">Акция</div>
                        <div class="product-item__new-tag">Новинка</div>         
                    </div>
                    <div class="promo-item__header item-header">
                        <div class="item-header__title">Bodo Excellence</div>
                        <div class="item-header__desc mt-12">Обновленная версия флагмана, Bodo. Обновленные автоматические программы, пульт и панель управления на подлокотнике. 8-роликовый 4D-механизм с прогревом роликов. Уникальная система массажа стоп. L-Shape каретка. Slider-система раскладки. Синхронизация массажа с любимой музыкой.</div>
                    </div>
                    <div class="promo-item__set-color mt-24">
                        <div class="color-pick__wrap flex --align-center">
                            <div class="color-pick__label --p mr-16">Цвет:</div>
                            <div class="color-pick__items flex">
                                <label class="color-item checkbox">
                                    <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Черный">
                                    <div class="color-item__thumb">
                                        <div class="color-item__color" style="background-color:#000"></div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="promo-item__purchase purchase flex">
                        <div class="purchase__wrap">
                            <div class="purchase__old-price flex --align-center"><s>799 250 Р</s> <span class="purchase__discount">-15%</span></div>
                            <div class="purchase__price">695 000 Р</div>
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
                                <div class="specs__value">	роликовый, воздушно-компрессионный, шиацу</div>
                            </div>
                            <div class="specs__row">
                                <div class="specs__name">Области массажа: </div>
                                <div class="specs__value">бёдра, голени, голова, плечи, поясница, руки, спина, стопы, шея, ягодицы</div>
                            </div>
                            <div class="specs__row">
                                <div class="specs__name">Дополнительные функции:</div>
                                <div class="specs__value">прогрев, сканирование тела</div>
                            </div>
                            <div class="specs__row">
                                <div class="specs__name">Регулировки: </div>
                                <div class="specs__value">зона массажа, интенсивность массажа, угол наклона спинки, подогрев</div>
                            </div>
                            <div class="specs__row">
                                <div class="specs__name">Вес пользователя:</div>
                                <div class="specs__value">до 150 кг</div>
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
                            <div class="item-header__desc mt-12">Массажное кресло Bodo Palladium современное, элегантное и функциональное. Оснащено супер длинной кареткой с 3D-массажным механизмом для глубокого и тщательного массажа от шеи до ягодиц и бедер до полного расслабления тела. Оздоровительный массаж у вас дома и стильное решение для вашего интерьера.</div>
                        </div>
                        <div class="promo-item__set-color">
                            <div class="color-pick__wrap flex --align-center">
                                <div class="color-pick__label --p mr-16">Цвет:</div>
                                <div class="color-pick__items flex">
                                    <label class="color-item checkbox">
                                        <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Синий">
                                        <div class="color-item__thumb">
                                            <div class="color-item__color" style="background-color:#00008b"></div>
                                        </div>
                                    </label>
                                    <label class="color-item checkbox">
                                        <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Серый">
                                        <div class="color-item__thumb">
                                            <div class="color-item__color" style="background-color:#808080"></div>
                                        </div>
                                    </label>
                                    <label class="color-item checkbox">
                                        <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Бордовый">
                                        <div class="color-item__thumb">
                                            <div class="color-item__color" style="background-color:#5F021F"></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="promo-item__purchase purchase flex">
                            <div class="purchase__wrap">
                                <div class="purchase__old-price flex --align-center"><s>778 550 Р</s> <span class="purchase__discount">-15%</span></div>
                                <div class="purchase__price">677 000 Р</div>
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
                                <div class="specs__value">до 150 кг</div>
                            </div>
                            <div class="specs__row">
                                <div class="specs__name">Режим нулевой гравитации:</div>
                                <div class="specs__value">Zero-G</div>
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
                                <source srcset="/template/dist/img/usmedica-jet.webp" type="image/webp">
                                <img src="/template/dist/img/usmedica-jet.png" type="image/png" alt="">
                            </picture>
                        </div>       
                        <div class="product-item__sales-tag">Акция</div>
                        <div class="product-item__new-tag">Новинка</div>         
                    </div>
                    <div class="promo-item__header item-header">
                        <div class="item-header__title">Us Medica Jet</div>
                        <div class="item-header__desc mt-12">Уникальное по своим возможностям массажное кресло модели US MEDICA Jet обладает самым широким набором функций. Передовые технологии делают кресло US MEDICA Jet поистине уникальным в своем роде.</div>
                    </div>
                    <div class="promo-item__set-color mt-24">
                        <div class="color-pick__wrap flex --align-center">
                            <div class="color-pick__label --p mr-16">Цвет:</div>
                            <div class="color-pick__items flex">
                                <label class="color-item checkbox">
                                    <input class="color-item__input" type="radio" name="chair_color" checked="checked" value="Бежевый">
                                    <div class="color-item__thumb">
                                        <div class="color-item__color" style="background-color:#f5f5dc"></div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="promo-item__purchase purchase flex">
                        <div class="purchase__wrap">
                            <div class="purchase__old-price flex --align-center"><s>828 000 Р</s> <span class="purchase__discount">-16%</span></div>
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
                    <div class="promo-item__specs specs">
                        <div class="specs__title">Технические характеристики:</div>
                        <div class="specs__wrap">
                            <div class="specs__row">
                                <div class="specs__name">Материал обивки:</div>
                                <div class="specs__value">высококлассная искусственная кожа</div>
                            </div>
                            <div class="specs__row">
                                <div class="specs__name">Виды массажа:</div>
                                <div class="specs__value">Разминание, постукивание, шиацу, похлопывание, шведский, роликовый</div>
                            </div>
                            <div class="specs__row">
                                <div class="specs__name">Области массажа: </div>
                                <div class="specs__value">Шея, плечи, спина, поясница, руки, ягодицы, бёдра, икры, стопы</div>
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
                                <div class="specs__value">Zero G</div>
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
                    <div class="promo-item__purchase purchase flex">
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
                <div class="promo__item promo-item --big js-cart-parent">
                    <input type="hidden" class="js-cart-id js-fave-id" value="">
                    <div class="promo-item__wrap">
                        <div class="promo-item__bg" style="background-color:#F5F5F5 ;"></div>
                        <div class="promo-items__img">
                            <picture>
                                <source srcset="/template/dist/img/oto-centurion.webp" type="image/webp">
                                <img src="/template/dist/img/oto-centurion.png" type="image/png" alt="">
                            </picture>
                        </div>       
                        <div class="product-item__sales-tag">Акция</div>
                        <div class="product-item__new-tag">Новинка</div>         
                    </div>
                    <div class="promo-item__content-wrapper">
                        <div class="promo-item__header item-header">
                            <div class="item-header__title">OTO CENTURION CN-01 ZEN</div>
                            <div class="item-header__desc mt-12">Массажное кресло Oto Centurion CN-01 Zen - обтекаемый дизайн и непревзойденная эргономика вдохновленные роскошными суперкарами мира, укомплектовано маской объемной медитации с дыхательной практикой ZEN.</div>
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
                        <div class="promo-item__purchase purchase flex">
                            <div class="purchase__wrap">
                                <div class="purchase__old-price flex --align-center"><s>862 500 Р</s> <span class="purchase__discount">-16%</span></div>
                                <div class="purchase__price">750 000 Р</div>
                            </div>
                            <div class="purchase__sub-wrap flex">
                                <div class="purchase__cart-add-btn btn --fill-1 --l">В корзину</div>
                                <div class="purchase__more-btn btn --l">Подробнее</div>
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
                                <div class="specs__value">Постукивающий, Растягивающий, Гуаша, Разминающий, Раскатывающий, Воздушно-компрессионный, Роликовый, Акупунктурный</div>
                            </div>
                            <div class="specs__row">
                                <div class="specs__name">Области массажа: </div>
                                <div class="specs__value">Поясница, Стопы, Бедра, Руки, Плечи, Икры, Шея, Спина, Ягодицы</div>
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
                                <source srcset="/template/dist/img/fujimo-ton.webp" type="image/webp">
                                <img src="/template/dist/img/fujimo-ton.png" type="image/png" alt="">
                            </picture>
                        </div>       
                        <div class="product-item__sales-tag">Акция</div>
                        <div class="product-item__new-tag">Новинка</div>         
                    </div>
                    <div class="promo-item__header item-header">
                        <div class="item-header__title">FUJIMO TON F888 ZEN</div>
                        <div class="item-header__desc mt-12">Fujimo TON F-888 — кресло с большой мощностью и гибкими настройками массажа. Одна из особенностей модели — подогрев самих массажных роликов для стоун-терапии.</div>
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
                            <div class="purchase__old-price flex --align-center"><s>688 850 Р</s> <span class="purchase__discount">-15%</span></div>
                            <div class="purchase__price">599 000 Р</div>
                        </div>
                        <div class="purchase__sub-wrap flex">
                            <? if ($in_cart != true) { ?>
                                <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                            <? } else { ?>
                                <div class="product-item__add-btn btn --green --l">В корзине</div>
                            <? } ?>
                            <a href="#" class="purchase__more-btn btn --l">Подробнее</a>
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
                                <div class="specs__value">Воздушно-компрессионный, Разминающий, Растягивающий, Роликовый, Шиацу</div>
                            </div>
                            <div class="specs__row">
                                <div class="specs__name">Области массажа: </div>
                                <div class="specs__value">Шея, Спина, Поясница, Плечи, Руки, Бедра, Ягодицы, Икры, Стопы</div>
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
                                <div class="specs__value">Zero G</div>
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
                                <source srcset="/template/dist/img/rovos-r775w.webp" type="image/webp">
                                <img src="/template/dist/img/rovos-r775w.png" type="image/png" alt="">
                            </picture>
                        </div>       
                        <div class="product-item__sales-tag">Акция</div>
                        <div class="product-item__new-tag">Новинка</div>         
                    </div>
                    <div class="promo-item__header item-header">
                        <div class="item-header__title">Rovos R775W</div>
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
                            <div class="purchase__old-price flex --align-center"><s>447 350 Р</s> <span class="purchase__discount">-15%</span></div>
                            <div class="purchase__price">389 000 Р</div>
                        </div>
                        <div class="purchase__sub-wrap flex">
                            <? if ($in_cart != true) { ?>
                                <a data-detail-btn="true" class="purchase__cart-add-btn js-cart-removed --id-<?=$item['id']?> js-cart-add btn --fill-1 --l">В корзину</a>
                            <? } else { ?>
                                <div class="product-item__add-btn btn --green --l">В корзине</div>
                            <? } ?>
                            <a href="/catalog/massazhnye-kresla/massazhnoye-kreslo-rovos-r775w-brown/" class="purchase__more-btn btn --l">Подробнее</a>
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
                                <div class="specs__value">Разминание, Постукивание, Воздушно-компрессионный массаж, Акупунктура, Растирание, Точечный массаж, Массаж Шиацу, Роликовый массаж, Комбинированный, Инфракрасное прогревание</div>
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
            </div>
        </div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>