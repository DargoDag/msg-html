<?php 
	$meta__title = "Трейд-ин";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap --trade-in pt-40">
	<div class="center-wrap">
		<div class="content__wrap flex --just-space">
			<div class="content__trade-in-wrap col --12">
                <div class="trade-in flex --just-space">
                    <div class="trade-in__info col --5">
                        <h1 class="content__title h1"><b>Трейд-ин</b></h1>
                        <div class="trade-in__post-title h3 mt-16"><b>Узнайте стоимость вашего старого массажера</b></div>
                        <div class="trade-in__desc p --l mt-16">Суть программы Трейд-ин Casada заключается в том, чтобы при покупке нового современного массажера Casada зачесть остаточную стоимость старого сдаваемого оборудования. Таким образом вы существенно экономите на приобретении нового массажера и избавляетесь от ненужного вам изделия. Заявку на трейд-ин мы передаём ближайшему в вашем регионе официальному дилеру Casada. Скидка программе трейд-ин не превышает 30%.</div>
                        <div class="trade-in__post-title h4 mt-40">У вас уже есть массажное кресло, но вы хотите купить более новую модель со скидкой?</div>
                        <div class="trade-in__items mt-32">
                            <!-- trade-in-item -->
                            <div class="trade-in-item flex --align-center">
                                <div class="trade-in-item__icon mr-20">
                                    <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/list-2.svg'); ?>
                                    <div class="trade-in-item__numb p --xl"><b>1</b></div>
                                </div>
                                <div class="trade-in-item__desc p --xl">Запоните форму для оценки <br>стоимости вашего кресла</div>
                            </div>
                            <!-- trade-in-item -->
                            <div class="trade-in-item flex --align-center">
                                <div class="trade-in-item__icon mr-20">
                                    <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/list-3.svg'); ?>
                                    <div class="trade-in-item__numb p --xl"><b>2</b></div>
                                </div>
                                <div class="trade-in-item__desc p --xl">Получите оценочную <br>стоимость</div>
                            </div>
                            <!-- trade-in-item -->
                            <div class="trade-in-item flex --align-center">
                                <div class="trade-in-item__icon mr-20">
                                    <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/headphones.svg'); ?>
                                    <div class="trade-in-item__numb p --xl"><b>3</b></div>
                                </div>
                                <div class="trade-in-item__desc p --xl">Дождитесь звонка <br>специалиста Трейд Инн</div>
                            </div>
                        </div>
                        <div class="trade-in__desc --p mt-40">Наш менеджер свяжется с вами, для согласования даты вывоза старого кресла и доставки нового со скидкой по программе Трейд Ин</div>
                    </div>
                    <div class="trade-in__sticky-wrap col --6">
                        <div class="trade-in__sticky px-32 py-32">
                            <div class="tabs flex --direction-column --align-center">
                                <div class="tabs__btns flex --align-center --just-space col --4">
                                    <div class="trade-in__tabs-btn tabs__btn --1 flex --align-center --just-center h5 --js is-active" data-tab="1">1</div>
                                    <div class="trade-in__tabs-btn tabs__btn flex --2 --align-center --just-center h5 --js" data-tab="2">2</div>
                                    <div class="trade-in__tabs-btn tabs__btn flex --3 --align-center --just-center h5 --js" data-tab="3">3</div>
                                </div>
                                <form action="#" method="post" name="form-7" class="trade-in__form-wrap">
                                    <div class="tabs__blocks mt-32">
                                        <div class="tabs__block --js --1 is-show flex --direction-column --align-center --just-space">
                                            <div class="trade-in__form">
                                                <div class="trade-in__inputs-wrap flex">
                                                    <div class="trade-in__input-wrap mr-16">
                                                        <input class="trade-in__input trade-in__field input --fill" type="text" name="model" placeholder="Модель*" required>
                                                    </div>
                                                    <div class="trade-in__input-wrap">
                                                        <input class="trade-in__input input --fill trade-in__field" type="text" name="brand" placeholder="Бренд" required>
                                                    </div>
                                                </div>
                                                <div class="trade-in__inputs-wrap flex mt-16">
                                                    <div class="trade-in__input-wrap mr-16">
                                                        <input class="trade-in__input input --fill trade-in__field" type="text" name="price" placeholder="Цена покупки по чеку*" required>
                                                    </div>
                                                    <div class="trade-in__input-wrap">
                                                        <input class="trade-in__input input --fill trade-in__field" type="text" name="serial_numb" placeholder="Уникальный номер прибора*" required>
                                                    </div>
                                                </div>
                                                <div class="trade-in__selects-wrap flex mt-16">
                                                    <div class="trade-in__select-wrap mr-16">
                                                        <select class="trade-in__select select --fill trade-in__field" name="use_term" required>
                                                            <option value="Не выбрано">Срок использования*</option>
                                                            <option value="Менее 1 месяца">Менее 1 месяца</option>
                                                            <option value="Менее 3 месяцев">Менее 3 месяцев</option>
                                                            <option value="Менее 6 месяцев">Менее 6 месяцев</option>
                                                            <option value="Менее 1 года">Менее 1 года</option>
                                                            <option value="Более 1 года">Более 1 года</option>
                                                        </select>
                                                    </div>
                                                    <div class="trade-in__select-wrap">
                                                        <select class="trade-in__select select --fill trade-in__field" name="efficiency" required>
                                                            <option value="Не выбрано">Работоспособность*</option>
                                                            <option value="Все функции работают">Все функции работают</option>
                                                            <option value="Одна из функций не работает">Одна из функций не работает</option>
                                                            <option value="Полностью нерабочее состояние">Полностью нерабочее состояние</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="trade-in__selects-wrap flex mt-16">
                                                    <div class="trade-in__select-wrap mr-16">
                                                        <select class="trade-in__select select --fill trade-in__field" name="usage" required>
                                                            <option value="Не выбрано">Степень износа*</option>
                                                            <option value="Опрятный товарный внешний вид">Опрятный товарный внешний вид</option>
                                                            <option value="Немного потрепанный внешний вид">Немного потрепанный внешний вид</option>
                                                            <option value="Внешний вид прибора ужасный">Внешний вид прибора ужасный</option>
                                                        </select>
                                                    </div>
                                                    <div class="trade-in__select-wrap">
                                                        <select class="trade-in__select select --fill trade-in__field" name="noize" required>
                                                            <option value="Не выбрано">Шум при работе*</option>
                                                            <option value="Работает бесшумно (исправен)">Работает бесшумно (исправен)</option>
                                                            <option value="Работает с легким шумом">Работает с легким шумом</option>
                                                            <option value="Наличие сильных шумов">Наличие сильных шумов</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popup__send-btn trade-in__tabs-btn tabs__btn --js btn --fill-1 p --xl mt-24" data-tab="2">Далее</div>
                                            <!-- <div class="popup__checkbox mt-16">
                                                <label class="checkbox">
                                                    <input type="checkbox" checked="checked" name="private" required>
                                                    <div class="flex --align-center">
                                                        <div class="checkbox__trigger"></div>
                                                        <div class="checkbox__label p --m ml-16">Даю согласие на <a href="/policy/" target="_blank" class="checkbox__link link"><b>обработку персональных данных</b></a></div>
                                                    </div>
                                                </label>
                                            </div> -->
                                        </div>
                                        <div class="tabs__block --js --2 flex --direction-column --align-center --just-space">
                                            <div class="trade-in__form flex --just-center">
                                                <div class="trade-in__products-carousel">
                                                    <?php $carusel = $populars; include($_SERVER['DOCUMENT_ROOT'].'/template/comp/sale-carousel/__sale-carousel-tradeIn.php'); ?>
                                                    <input class="trade-in__product-name input" type="hidden" name="product_name">
                                                </div>
                                            </div>
                                            <div class="popup__send-btn trade-in__tabs-btn tabs__btn --js btn --fill-1 p --xl mt-24" data-tab="3">Далее</div>
                                        </div>
                                        <div class="tabs__block --js --3 flex --direction-column --align-center --just-space">
                                            <div class="trade-in__form">
                                                <div class="trade-in__input-wrap">
                                                    <input class="trade-in__input input --fill trade-in__field" type="text" name="name" placeholder="Имя*" required>
                                                </div>
                                                <div class="trade-in__input-wrap mt-16">
                                                    <input class="trade-in__input input --fill trade-in__field" type="tel" name="tel" placeholder="Телефон для связи*" required>
                                                </div>
                                                <div class="trade-in__input-wrap mt-16">
                                                    <input class="trade-in__input input --fill trade-in__field" type="text" name="city" placeholder="Город проживания*" required>
                                                </div>
                                            </div>
                                            <button type="send" class="popup__send-btn btn feedback btn-success --fill-1 p --xl mt-24">Отправить</button>
                                            <div class="popup__checkbox mt-16">
                                                <label class="checkbox">
                                                    <input type="checkbox" checked="checked" name="private" required>
                                                    <div class="flex --align-center">
                                                        <div class="checkbox__trigger"></div>
                                                        <div class="checkbox__label p --m ml-16">Даю согласие на <a href="/policy/" target="_blank" class="checkbox__link link"><b>обработку персональных данных</b></a></div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
    <div class="content__warning-modal --js__warning-modal" style="display: none">Заполните все обязательные поля!</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>