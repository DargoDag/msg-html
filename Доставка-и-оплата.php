<?php 
	$meta__title = "Доставка и оплата";
	$meta__desc  = "Условия доставки и оплаты массажного оборудования в нашем магазине";
	$meta__key   = "";
	$modifier   = "--delivery";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap <?= $modifier ?> pt-40">
	<div class="center-wrap">
		<div class="content__head">
			<div class="content__head-title">
				<h1 class="content__title h1"><b>Доставка и оплата</b></h1>
				<div class="content__post-title h5 mt-24"><b>Уважаемые покупатели!</b></div>
				<div class="content__desc h5 mt-8">Благодарим Вас за проявленное внимание к нашему интернет-магазину Массажер Маркет <br>Оформить заказ Вы можете, как на сайте, воспользовавшись корзиной, так и по телефону. <br>Наши сотрудники свяжутся с Вами в самые короткие сроки.</div>
			</div>
		</div>
		<div class="content__wrap mt-64">
			<div class="content__delivery-wrap col --12">
				<div class="delivery">
					<div class="delivery__title h3">Возможные способы оплаты:</div>
					<div class="delivery__items grid --temp-col-3 --gap-24 mt-24">
						<!-- delivery-item -->
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/wallet-2.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Наличный расчет</b></div>
							<div class="delivery-item__desc p --l mt-8">Оплата производится наличными курьеру при доставке или в магазине при самовывозе. Вместе с товаром передается товарный и кассовый чеки, а также гарантийный талон.</div>
						</div>
						<!-- delivery-item -->
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/courier-2.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Банковской картой курьеру</b></div>
							<div class="delivery-item__desc p --l mt-8">Курьер выезжает к Вам с терминалом оплаты. При оформление возврата деньги возвращаются только на карту.</div>
						</div>
						<!-- delivery-item -->
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/credit.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Банковской картой на сайте</b></div>
							<div class="delivery-item__desc p --l mt-8">Для выбора оплаты товара с помощью банковской карты на странице оформления заказа необходимо выбрать тип платежа "Оплата заказа банковской картой". <br>Оплата происходит через ПАО СБЕРБАНК с использованием банковских карт следующих платёжных систем: <a href="#" class="delivery-item__desc-link link">Подробное описание процесса оплаты</a></div>
						</div>
						<!-- delivery-item -->
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/credit-cart.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Кредитной картой на сайте</b></div>
							<div class="delivery-item__desc p --l mt-8">Так же вы можете оплатить товар с помощью кредитной карты на странице оформления заказа.</div>
						</div>
						<!-- delivery-item -->
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/list-4.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Безналичный расчет</b></div>
							<div class="delivery-item__desc p --l mt-8">С физическими и юридическими лицами возможен безналичный расчет, который производится согласно договору «Купли продажи». Мы с вами подписываем договор и выставляем счет для предоплаты. Далее вы оплачиваете и после этого мы отправляем Вам товар вместе со всем необходимым пакетом документов.</div>
						</div>
						<!-- delivery-item -->
						<div class="delivery-item --sber py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/sber.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Оплата через Сбербанк</b></div>
							<div class="delivery-item__desc p --l mt-8">Вы можете оплатить заказ в любом отделении Сбербанка. За услугу по переводу денег с Вас возьмут от 3 до 7% от стоимости заказа, в зависимости от региона. Перечисление денег займет порядка 10 дней</div>
						</div>
					</div>
					<div class="delivery__title h3 mt-64">Стоимость доставки массажеров и массажных кресел <br>курьером или транспортной компанией</div>
					<div class="delivery__items grid --temp-col-3 --gap-24 mt-32">
						<!-- delivery-item 
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/wallet-2.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Наличный расчет</b></div>
							<div class="delivery-item__desc p --l mt-8">Оплата производится наличными курьеру при доставке или в магазине при самовывозе. Вместе с товаром передается товарный и кассовый чеки, а также гарантийный талон.</div>
						</div>
						<!-- delivery-item 
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/courier-2.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Банковской картой курьеру</b></div>
							<div class="delivery-item__desc p --l mt-8">Курьер выезжает к Вам с терминалом оплаты. При оформление возврата деньги возвращаются только на карту.</div>
						</div>
						<!-- delivery-item 
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/credit.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Банковской картой на сайте</b></div>
							<div class="delivery-item__desc p --l mt-8">Для выбора оплаты товара с помощью банковской карты на странице оформления заказа необходимо выбрать тип платежа "Оплата заказа банковской картой". <br>Оплата происходит через ПАО СБЕРБАНК с использованием банковских карт следующих платёжных систем: <a href="#" class="delivery-item__desc-link link">Подробное описание процесса оплаты</a></div>
						</div>
						<!-- delivery-item -->
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/truck-2.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Товары стоимостью выше 5000 рублей доставляются БЕСПЛАТНО.</b></div>
							<div class="delivery-item__desc p --l mt-8">Если стоимость товаров ниже 5000 рублей, то стоимость доставки составляет 500 рублей. <br>*(бесплатная доставка на Чукотский Автономный Округ, Республику Ингушетия, Норильск не распространяется, стоимость уточняйте у менеджера)</div>
						</div>
						<!-- delivery-item -->
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/map-2.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Массажные кресла доставляются БЕСПЛАТНО в любой город России.</b></div>
							<div class="delivery-item__desc p --l mt-8">В городах где присутствуют наши магазины и специалисты массажные кресла доставляются бесплатно до квартиры. <br>Сроки поставки зависят от выбранной транспортной компании и города. <br>(Города уточняйте у наших менеджеров по телефону 8 800 222-37-02)</div>
						</div>
						<!-- delivery-item -->
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/chair.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Установка и настройка массажных кресел в городах нахождения наших магазинов БЕСПЛАТНАЯ и осуществляется нашей компанией.</b></div>
							<div class="delivery-item__desc p --l mt-8">(Города уточняйте у наших менеджеров по телефону 8 800 222-37-02)</div>
						</div>
						<!-- delivery-item -->
						<div class="delivery-item py-40 px-40">
							<div class="delivery-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/box.svg'); ?>
							</div>
							<div class="delivery-item__label h5 mt-16"><b>Большой выбор транспортных компаний для доставки массажных кресел по территории РФ.</b></div>
							<div class="delivery-item__desc p --l mt-8">Если стоимость товаров ниже 5000 рублей, то стоимость доставки составляет 500 рублей. <br>*(бесплатная доставка на Чукотский Автономный Округ, Республику Ингушетия, Норильск не распространяется, стоимость уточняйте у менеджера)</div>
						</div>
					</div>
					<div class="delivery__desc-wrap mt-72 pt-64">
						<div class="delivery__title h3"><b>Время доставки</b></div>
						<div class="delivery__desc p --xl mt-16">Время доставки согласовывается с менеджером Службы доставки, который обязательно свяжется с Вами сразу после того, как Вы разместите свой заказ. <br>Внимание! Неправильно указанный номер телефона, неточный или неполный адрес могут привести к дополнительной задержке! Пожалуйста, внимательно проверяйте Ваши персональные данные при регистрации и оформлении заказа.Конфиденциальность ваших регистрационных данных гарантируется.
						Доставка выполняется ежедневно с 10:00 до 20:00 часов. <br><b>Время осуществления доставки зависит от времени размещения заказа и наличия товара на складе:</b> <br>если заказ подтвержден менеджером Службы доставки до 12:00, товар может быть доставлен на следующий рабочий день между 10:00 и 15:00 или между 15:00 и 20:00; если заказ подтвержден менеджером Службы доставки после 12:00, товар может быть доставлен на следующий рабочий день между 15:00 и 18:00. <br>Вы также можете указать любое другое удобное время доставки, и покупка будет доставлена в удобное Вам время. Иное время доставки, а также время доставки в населенные пункты области определяется по договоренности с клиентом.</div>
						<div class="delivery__title h3 mt-48"><b>Место доставки</b></div>
						<div class="delivery__desc p --xl mt-16">Доставка осуществляется по адресу, указанному при оформлении заказа. Если необходимо доставить товар по иному адресу, необходимо сообщить адрес менеджеру Службы доставки, который свяжется с Вами непосредственно после оформления заказа на сайте.</div>
						<div class="delivery__title h3 mt-48"><b>Правила</b></div>
						<div class="delivery__desc p --xl mt-16">При доставке Вам будут переданы все необходимые документы на покупку: товарный, кассовый чеки, а также гарантийный талон. При оформлении покупки на организацию, Вам будут переданы счет-фактура, а также накладная, в которой необходимо поставить печать Вашей организации.Цена, указанная в переданных Вам курьером документах, является окончательной, курьер не обладает правом корректировки цены.Стоимость доставки выделяется в документах на покупку отдельной графой.</div>
						<div class="delivery__desc p --xl mt-40">Внимание! Просим Вас помнить, что все технические параметры и потребительские свойства приобретаемого товара Вам следует уточнять у нашего менеджера до момента покупки товара. В обязанности работников Службы доставки не входит осуществление консультаций и комментариев относительно потребительских свойств товара. При необходимости инсталляции приобретаемого в нашем магазине товара Вам необходимо сообщить об этом нашему менеджеру.</div>
						<div class="delivery__desc p --xl mt-40">При доставке Вам заказанного товара проверяйте комплектность доставленного товара, работоспособность товара, соответствие доставленного товара описанию на нашем сайте, также проверьте товар на наличие механических повреждений. При не заявлении Вами при получении товара претензий по поводу механических повреждений, в дальнейшем подобные претензии не рассматриваются.В случае вопросов, пожеланий и претензий обращайтесь к нам по следующим координатам:</div>
						<div class="delivery__desc p --xl mt-40">Служба доставки: 8 (800) 600 41 26</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>