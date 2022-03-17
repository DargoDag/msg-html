<?php 
	$meta__title = "О магазине massager.market";
	$meta__desc  = "Информация о магазине массажных кресел и массажного оборудования massager.market";
	$meta__key   = "";
	$modifier   = "--about-shop";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-40">
	<div class="center-wrap">
		<div class="content__head <?= $modifier ?>">
			<h1 class="content__title h1 <?= $modifier ?>"><b>О магазине</b></h1>
	    </div>
		<div class="content__wrap">
			<div class="content__about-wrap col --12 mt-40">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/about-shop/__about-shop.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>