<?php 
	$meta__title = "Вакансии";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap --vacancy pt-48">
	<div class="center-wrap">
        <h1 class="content__title h1"><b>Вакансии</b></h1>
		<div class="content__wrap flex --just-space mt-24">
            <div class="content__vacancy-wrap col --12">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/vacancy/__vacancy.php'); ?>
            </div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>