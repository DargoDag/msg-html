<?php 
	$meta__title = "Типовая";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "--banner";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap">
	<div class="content__page-banner --promo">
		<div class="content__banner-wrap">
			<div class="center-wrap">
				<div class="content__banner-sub-wrap">
					<h1 class="content__banner-title">Заголовок типовой <br>промо страницы</h1>
					<div class="content__banner-desc p --xl mt-24">Сайт рыбатекст поможет дизайнеру, верстальщику, <br>вебмастеру сгенерировать несколько абзацев более менее</div>
				</div>
			</div>
		</div>
		<picture class="content__banner-img lazy">
			<source srcset="/template/dist/img/promo-banner.webp" type="image/webp">
			<img src="/template/dist/img/promo-banner.jpg" type="image/jpg">
		</picture>
		<div class="content__banner-bottom"></div>
	</div>
	<div class="center-wrap pt-40">
		<div class="content__wrap flex --just-space --align-stretch">
			<div class="content__advantages-items col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/advantages/__advantages.php'); ?>
			</div>
			<div class="content__promo-wrap col --12 mt-72">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/promo/__promo.php'); ?>
			</div>
			<div class="content__carosusel-wrap col --12 mt-64">
				<? $carusel_title = 'В комплекте';?>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/products-carousel/__products-carousel.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>