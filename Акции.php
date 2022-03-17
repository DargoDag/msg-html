<?php 
	$meta__title = "Акции и скидки на массажные кресла";
	$meta__desc  = "Специальные условия на товары нашего магазина";
	$meta__key   = "";
	$modifier   = "--sales";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-40">
	<div class="center-wrap">
		<div class="content__head">
			<div class="content__head-title flex --align-center">
				<h1 class="content__title h1 <?= $modifier ?> mr-32"><b>Акции</b></h1>
				<div class="content__post-title-min p --xl <?= $modifier ?> col --7"><b>Сайт рыбатекст поможет дизайнеру</b>, верстальщику, вебмастеру сгенерировать несколько абзацев более менее <b>осмысленного текста</b> рыбы на русском языке</div>
			</div>
		</div>
		<div class="content__wrap mt-48">
			<div class="content__sales-items col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/sales/__sales.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>