<?php 
	$meta__title = "FAQ";
	$meta__desc  = "Вопросы и ответы / massager.market";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap --faq pt-48">
	<div class="center-wrap">
        <h1 class="content__title h1"><b>Вопрос ответ</b></h1>
		<div class="content__wrap flex --just-space mt-24">
            <div class="content__faq-wrap col --12">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/faq/__faq.php'); ?>
            </div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>