<?php 
	$meta__title = "Акции";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "--sales-2";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-96">
	<div class="center-wrap">
		<div class="content__head">
			<div class="content__head-title flex --align-center">
				<h1 class="content__title h1 <?= $modifier ?> mr-32"><b>Распродажа</b></h1>
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