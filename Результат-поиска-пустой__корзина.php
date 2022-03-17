<?php 
	$meta__title = "Корзина пуста";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="content__main-wrap --empty-basket pt-128">
	<div class="center-wrap">
		<div class="content__head">
			<div class="content__search-wrap flex --direction-column --align-center --just-center">
				<div class="content__search-icon">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/cart.svg'); ?>
				</div>
				<div class="content__search-value mt-16">Ваша корзина пуста</div>
				<div class="content__search-desc h5 mt-16">Для выбора товара перейдите в каталог, найдите необходимый товар, и нажмите кнопку "Добавить в корзину"</div>
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