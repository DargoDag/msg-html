<?php 
	$meta__title = "Магазины массажных кресел и товаров для массажа massager.market";
	$meta__desc  = "В наших магазинах вы можете приобрести массажные кресла, оборудования для массажа и получить профессиональную консультацию";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-40">
	<div class="center-wrap">
		<h1 class="content__title h1"><b>Магазины</b></h1>
		<div class="content__wrap flex --just-space mt-32">
			<div class="content__map-wrap col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/map/__map.php'); ?>
				<div class="content__map-desc --p">Важно! Перед посещением уточните наличие по телефону: <a href="tel:88006004126" class="content__map-link link">8 (800) 600-41-26</a></div>
			</div>
			<div class="content__stores-wrap col --12 mt-32">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/stores/__stores.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>