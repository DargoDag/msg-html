<?php 
	$meta__title = "Рассрочка";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "--banner --installment";
	$news = json_decode(file_get_contents(API.'/api/get-items.php?filter=[{"type":"price","values":{"min":150000,"max":1350000}}]'), true);
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap">
	<div class="content__page-banner <?= $modifier ?>">
		<div class="content__banner-wrap">
			<div class="center-wrap">
				<div class="content__banner-sub-wrap">
					<h1 class="content__banner-title">Рассрочка <br>без переплат</h1>
					<div class="content__banner-desc-items flex mt-24">
						<!-- desc-item -->
						<div class="desc-item">
							<div class="desc-item__label h4"><span>0</span> руб.</div>
							<div class="desc-item__desc p --xl">Первый взнос</div>
						</div>
						<!-- desc-item -->
						<div class="desc-item">
							<div class="desc-item__label h4"><span>0%</span></div>
							<div class="desc-item__desc p --xl">Переплата</div>
						</div>
						<!-- desc-item -->
						<div class="desc-item">
							<div class="desc-item__label h4"><span>0</span> мес.</div>
							<div class="desc-item__desc p --xl">Срок</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<picture class="content__banner-img lazy">
			<source srcset="/template/dist/img/installment-banner.webp" type="image/webp">
			<img src="/template/dist/img/installment-banner.jpg" type="image/jpg">
		</picture>
		<div class="content__banner-bottom"></div>
	</div>
	<div class="center-wrap pt-56">
		<div class="content__wrap flex --just-space --align-stretch">
			<div class="content__installment-desc --granting col --12 pb-88">
				<div class="installment-desc flex --just-space">
					<div class="installment-desc__label col --4">Условия предоставления рассрочки</div>
					<div class="installment-desc__desc col --7">
						<ul class="installment-desc__list">
							<li class="installment-desc__list-item flex h5">
								<span>Минимальный возраст заёмщика - <b>18 лет</b></span>
							</li>
							<li class="installment-desc__list-item flex h5">
								<span>Сумма рассрочки <b>от 10 000 рублей до 1 500 000 рублей</b></span>
							</li>
							<li class="installment-desc__list-item flex h5">
								<span>Рассрочка сроком <b>не более 12 месяцев</b></span>
							</li>
							<li class="installment-desc__list-item flex h5">
								<span>Подписание договора в онлайн режиме или в удобном для Вас месте</span>
							</li>
							<li class="installment-desc__list-item flex h5">
								<span>Для оформления нужен <b>только паспорт гражданина РФ</b></span>
							</li>
							<li class="installment-desc__list-item flex h5">
								<span>Наличие <b>постоянного источника доходов</b> (работа, пенсия)</span>
							</li>
						</ul>
						<div class="installment-desc__post-desc --p mt-24">Кроме регионов: Чеченская республика; Республика Дагестан; Республика Кабардино-Балкария; Северная <br>и Южная Осетия (Алания); Республика Ингушетия; Карачаево-Черкесская республика.</div>
					</div>
				</div>
			</div>
			<div class="content__installment-items mt-72">
				<div class="installment-items__wrap">
					<div class="installment-items__label h2"><b>Как купить в рассрочку?</b></div>
					<div class="installment-items flex --just-space mt-32">
						<!-- installment-item -->
						<div class="installment-item flex --direction-column --align-center col --3">
							<div class="installment-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/chair.svg'); ?>
							</div>
							<div class="installment-item__desc p --xl px-40 mt-24"><b>Перейдите</b> <br>в карточку выбранного <br>вами товара</div>
						</div>
						<!-- installment-item -->
						<div class="installment-item flex --direction-column --align-center col --3">
							<div class="installment-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/calendar.svg'); ?>
							</div>
							<div class="installment-item__desc p --xl px-40 mt-24">Нажмите на «<b>купить в <br>рассрочку</b>», справа от <br>фотографии товара</div>
						</div>
						<!-- installment-item -->
						<div class="installment-item flex --direction-column --align-center col --3">
							<div class="installment-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/buy.svg'); ?>
							</div>
							<div class="installment-item__desc p --l px-40 mt-24"><b>Заполните простую форму</b> для обратной связи (ФИО, телефон, E-mail) и нажмите «Оформить рассрочку»</div>
						</div>
						<!-- installment-item -->
						<div class="installment-item flex --direction-column --align-center col --3">
							<div class="installment-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/phone.svg'); ?>
							</div>
							<div class="installment-item__desc p --l px-24 mt-24">В случае одобрения сервисом Pay Late необходимо <b>подтвердить покупку</b>, пройдя по ссылке, которую Pay Late вышлет в смс сообщении</div>
						</div>
						<!-- installment-item -->
						<div class="installment-item flex --direction-column --align-center col --6 mt-24">
							<div class="installment-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/file.svg'); ?>
							</div>
							<div class="installment-item__desc p --l px-40 mt-24">При подписании договора, необходимо предоставить <b>оригинал и копию паспорта</b> (разворот с фото и разворот с действующей регистрацией); Если Вы не сможете предоставить копии документов, специалистом будет произведена фотосъёмка с оригинала документов</div>
						</div>
						<!-- installment-item -->
						<div class="installment-item flex --direction-column --align-center col --3 mt-24">
							<div class="installment-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/truck.svg'); ?>
							</div>
							<div class="installment-item__desc p --l px-40 mt-24">После <b>подписания договора <br>с банком</b>, мы доставимВам вашу покупку</div>
						</div>
						<!-- installment-item -->
						<div class="installment-item flex --direction-column --align-center col --3 mt-24">
							<div class="installment-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/headphones.svg'); ?>
							</div>
							<div class="installment-item__desc p --l px-32 mt-24">После этого <b>с Вами свяжется специалист для дальнейшего анкетирования</b> и отправкизаявки в банки - партнёры</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content__carousel-wrap col --12 mt-80">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/banks-carousel/__banks-carousel.php'); ?>
			</div>
			<div class="content__installment-desc --repayment flex --just-center col --12 pt-64 pb-80 mt-80">
				<div class="content__installment-desc-wrap col --10">
					<div class="installment-desc__label h2"><b>Способы погашения рассрочки</b></div>
					<div class="installment-desc__desc mt-24">
						<ul class="installment-desc__list">
							<li class="installment-desc__list-item flex p --xl">
								<span>В отделениях банка и дополнительных офисах (Банкоматы);</span>
							</li>
							<li class="installment-desc__list-item flex p --xl">
								<span>В отделениях Почта России;</span>
							</li>
							<li class="installment-desc__list-item flex p --xl">
								<span>Платёжная система «ЭЛЕКСНЕТ». При оплате взимается комиссия. Уточните размер комиссии заранее;</span>
							</li>
							<li class="installment-desc__list-item flex p --xl">
								<span>Платёжная сеть «РАПИДА». При оплате взимается комиссия. Уточните размер комиссии заранее;</span>
							</li>
							<li class="installment-desc__list-item flex p --xl">
								<span>Платёжная сеть «QIWI». При оплате взимается комиссия. Уточните размер комиссии заранее;</span>
							</li>
							<li class="installment-desc__list-item flex p --xl">
								<span>Межбанковский перевод. Сумму очередного платежа по рассрочке можно просто перевести. Для этого надо обратиться в любой ближайший банк и оформить обычный банковский перевод. Размер комиссии следует уточнить перед осуществлением перевода;</span>
							</li>
							<li class="installment-desc__list-item flex p --xl">
								<span>Бухгалтерия организации, в которой работает клиент. Перечислять платежи по рассрочке может бухгалтерия компании, в которой работает заемщик. Для этого достаточно заполнить и передать в бухгалтерию заявление на ежемесячное перечисление денежных средств из суммы заработной платы. Платежи будут осуществляться каждый месяц, в определенный день. От работника потребуется только контролировать этот процесс;</span>
							</li>
							<li class="installment-desc__list-item flex p --xl">
								<span>С помощью Интернет-Банка;</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="content__catalog-items-wrap mt-72">
				<div class="content__catalog-items-title h2"><b>Товары доступные в рассрочку</b></div>
				<div class="content__catalog-items col --12 mt-32">
					<? $carousel_title = 'Товары доступные в рассрочку';?>
					<?php $items = $news; include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-list/__catalog-list.php'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>