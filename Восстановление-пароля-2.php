<?php 
	$meta__title = "Восстановление пароля 2";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="content__main-wrap --password py-128">
	<div class="center-wrap">
		<div class="content__head flex --direction-column --align-center --just-center">
			<div class="content__search-wrap flex --direction-column --align-center --just-center col --4">
				<div class="content__search-icon">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/email-2.svg'); ?>
				</div>
				<div class="content__search-desc mt-24">На e-mail <b>test****.com</b> <br>отправлено письмо с инструкцией по восстановлению пароля.</div>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>