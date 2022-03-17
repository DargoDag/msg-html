<?php 
	$meta__title = "Регистрация";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-48">
	<div class="center-wrap">
		<div class="content__wrap">
            <div class="content__register-wrap flex --just-center --align-center col --12">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/auth/register.php'); ?>
            </div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>