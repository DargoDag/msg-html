<?php 
	$meta__title = "Заказы";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap">
	<div class="center-wrap pt-40">
		<div class="content__wrap flex --just-space --align-stretch">
			<div class="content__history-wrap col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/personal/history.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>