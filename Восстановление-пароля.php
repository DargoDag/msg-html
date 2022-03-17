<?php 
	$meta__title = "Восстановление пароля";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-48">
	<div class="center-wrap">
		<div class="content__wrap">
            <div class="content__password-wrap flex --just-center --align-center col --12">
				<div class="password trade-in__sticky-wrap flex --direction-column --align-center col --4">
        			<h1 class="auth__title h3"><b>Восстановление пароля</b></h1>
					<div class="trade-in__sticky mt-24">
						<div class="tabs flex --direction-column --align-center">
							<div class="tabs__btns flex --align-center --just-space col --4">
								<div class="tabs__btn flex --align-center --just-center h5 --js is-active" data-tab="1">1</div>
								<div class="tabs__btn flex --align-center --just-center h5 --js" data-tab="2">2</div>
								<div class="tabs__btn flex --align-center --just-center h5 --js" data-tab="3">3</div>
							</div>
							<div class="tabs__blocks mt-32">
								<div class="tabs__block --js --1 is-show">
        							<p class="auth__post-title p --l my-0">Заполните форму ниже чтобы восстановить пароль или зарегистрируйтесь, если вы еще не <a href="#" class="link --color-dark"><b>зарегистрированы</b></a>.</p>
									<form action="get" class="trade-in__form mt-32">
										<div class="trade-in__inputs-wrap flex">
											<div class="trade-in__input-wrap">
												<input class="trade-in__input input --fill" type="email" name="email" placeholder="Введите ваш e-mail">
											</div>
										</div>
       	 								<button class="auth__form-send-btn mt-24 btn --fill-1 --xl"><span class="p --xl">Востановить</span></button>
									</form>
									<div class="auth__or">
										<div class="auth__or-label my-16 flex --align-center --just-space">
											<div class="auth__or-label-line col --auto"></div>
											<div class="auth__or-label-text mx-16"><b>или</b></div>
											<div class="auth__or-label-line col --auto"></div>
										</div>
										<div class="auth__or-btns">
											<a href="#" class="auth__or-btn auth__login-suid btn mt-18 --fill-4"><span class="--p">Войти</span></a>
										</div>
									</div>
								</div>
								<div class="tabs__block --js --2">
								</div>
								<div class="tabs__block --js --3">
									<form action="#" class="auth__form">
										<div class="auth__form-line  ">
											<div class="big-input --no-radius --no-border --password">
												<input type="password" class="big-input__input" placeholder="Введите пароль">
												<div class="big-input__title">Пароль</div>
												<i class="show-password js-show-password --svg__eye"></i>
											</div>
										</div>
										<div class="auth__form-line mt-12">
											<div class="big-input --no-radius --no-border --password">
												<input type="password" class="big-input__input" placeholder="Введите пароль">
												<div class="big-input__title">Повторите пароль</div>
												<i class="show-password js-show-password --svg__eye"></i>
											</div>
										</div>
       	 								<button class="auth__form-send-btn mt-24 btn --fill-1 --xl"><span class="p --xl">Задать новый пароль</span></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>