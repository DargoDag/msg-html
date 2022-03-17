<?php 
	$meta__title = "Заказ оформлен";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="content__main-wrap --order-confirm pt-128">
	<div class="center-wrap">
		<div class="content__head">
			<div class="content__search-wrap flex --direction-column --align-center --just-center">
				<div class="content__search-icon">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/cart.svg'); ?>
				</div>
				<div class="content__search-title h2 mt-16"><b>Спасибо за заказ!</b></div>
				<!-- <div class="content__search-post-tilte p --l mt-8"><b>Ваш заказ №9 от 01.02.2020 14:37:28 успешно создан.</b></div> -->
				<div class="content__search-post-tilte p --l mt-8"><b>Ваш заказ успешно создан.</b></div>
				<div class="content__search-desc --p mt-16">Наш эксперт свяжется с вами в течении 15 мин для подтверждения заказа</div>
				<div class="content__btns-wrap flex mt-40">
					<a href="/" class="content__on-main-btn btn --fill-1 p --l">На главную</a>
				</div>
			</div>
		</div>
		<div class="content__wrap mt-56">
			<div class="content__products-carousel col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/products-carousel/__products-carousel.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>