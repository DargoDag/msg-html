<?php 
	$meta__title = "Корзина";
	$meta__desc  = "Оформите ваш заказ";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap --basket pt-48">
	<div class="center-wrap">
		<div class="content__head flex --align-center --just-space">
			<div class="content__head-title flex --align-center">
				<h1 class="content__title h1 mr-32"><b>Каталог</b></h1>
				<a href="/fave/" class="content__sub-title link --color-dark"><b>Избранное</b></a>
			</div>
			<div class="content__head-btns flex --align-center">
				<div class="content__head-btn --trash btn mr-40">
					<div class="content__head-btn-icon --svg__trash mr-12"></div>
					<div class="content__head-btn-label --p">Очистить</div>
				</div>
				<div class="content__head-btn --print btn">
					<div class="content__head-btn-icon --svg__print mr-12"></div>
					<div class="content__head-btn-label --p">Распечатать</div>
				</div>
			</div>
		</div>
		<div class="content__wrap flex --just-space mt-40">
			<div class="content__basket-wrap col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/basket/__basket.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>