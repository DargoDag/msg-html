<?php 
	$meta__title = "Каталог массажного оборудования, массажных кресел и комплектующих - massager.market";
	$meta__desc  = "В нашем каталоге вы найдете массажные кресла, комплектующие к ним, и оборудования для массажа";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-40">
	<div class="center-wrap">
		<div class="content__head">
			<div class="content__head-title flex --align-center">
				<h1 class="content__title h1 mr-32"><b>Каталог</b></h1>
				<div class="content__post-title-min p --xl"><?=$counts?> ед. товаров</div>
			</div>
		</div>
		<div class="content__wrap mt-32">
			<div class="content__catalog-items col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog/__catalog.php'); ?>
			</div>
			<div class="content__catalog-carousel col --12 mt-88">
				<? $carusel_title = 'Лучшие товары';?>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/products-carousel/__products-carousel.php'); ?>
			</div>
			<div class="content__catalog-seo col --12 mt-88">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/seo-text/__seo-text.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>