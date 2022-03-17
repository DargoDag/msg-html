<?php 
	$meta__title = "Контакты";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "--contacts";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-40">
	<div class="center-wrap">
        <h1 class="content__titles h1 <?= $modifier ?>"><b>Контакты</b></h1>
        <div class="content__contacts-wrap mt-32">
            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/contacts/__contacts.php'); ?>
        </div>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>