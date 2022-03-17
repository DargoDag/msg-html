<?php 
	$meta__title = "Избранное";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
	$fave_items = file_get_contents(API.'/api/get-fave.php?view=fave', false, $context);
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap ">
	<div class="center-wrap pt-40">
		<div class="content__head flex --align-center --just-space">
			<h1 class="content__title h1"><b>Избранное</b></h1>
			<div class="page-header-perosnal__log-out-wrap flex --align-center">
				<div class="page-header__user-name p --xl mr-24">@mail.com</div>
				<div class="page-header-perosnal__log-out btn --fill-1">
					<span class="p --xl">Выйти</span>
				</div>
			</div>
		</div>
		<div class="content__wrap flex --just-space --align-stretch mt-32">
			<div class="content__catalog-items col --12">
				<div class="catalog-list">
					<div class="catalog-list__products-items grid --temp-col-4 js-fave-items">
						<?=$fave_items?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>