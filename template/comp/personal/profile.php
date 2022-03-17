<div class="profile">
    <div class="page-header-perosnal__top-wrap flex --just-space --align-center">
        <h1 class="page-header__title h1"><b>Профиль</b></h1>
        <div class="page-header-perosnal__log-out-wrap flex --align-center">
            <div class="page-header__user-name p --xl mr-24">test@test.com</div>
            <div class="page-header-perosnal__log-out btn --fill-1">
                <span class="p --xl">Выйти</span>
            </div>
        </div>
    </div>
    <div class="profile__wrap flex --just-space mt-40">
        <div class="personal-nav col --3 pr-56">
            <div class="personal-nav__stiky-wrap js-stiky">
                <div class="personal-nav__links">
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/cart.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Заказы <b>(3)</b></span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/clock.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>История заказов <b>(3)</b></span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/favor.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Избранное <b>(16)</b></span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center is-active">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/auth-2.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Личные данные</span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/compare.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Сравнения</span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/logout.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Выйти</span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="personal-page__content col --9">
            <form class="personal-fields">
                <div class="personal-fields__wrap grid --temp-col-2 --gap-16">
                    <div class="personal-field">
                        <div class="big-input --no-radius is-has">
                            <input type="text" class="big-input__input" placeholder="Имя" value="Александр">
                            <div class="big-input__title">Имя</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius is-has">
                            <input type="text" class="big-input__input" placeholder="Город" value="Симферополь">
                            <div class="big-input__title">Город</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius is-has">
                            <input type="text" class="big-input__input" placeholder="_@_._" value="test@test.com">
                            <div class="big-input__title">E-mail</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius --password">
                            <input type="password" class="big-input__input" placeholder="Пароль">
                            <div class="big-input__title">Пароль</div>
                            <i class="show-password js-show-password --svg__eye"></i>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius is-has">
                            <input type="text" class="big-input__input js-mask__tell --tell" placeholder="Телефон" value="+7 (978) 123-45-67">
                            <div class="big-input__title">Телефон</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius --password">
                            <input type="password" class="big-input__input" placeholder="Повторите пароль">
                            <div class="big-input__title">Повторите пароль</div>
                            <i class="show-password js-show-password --svg__eye"></i>
                        </div>
                    </div>
                </div>
                <div class="personal-fields__wrap mt-24">
                    <div class="personal-field grid --temp-col-2 --gap-16 --align-center">
                        <div class="auth__form-bottom">
                            <div class="auth__policy">
                                <label class="checkbox --color-dark">
                                    <input type="checkbox" checked="checked">
                                    <div class="flex --align-center">
                                        <div class="checkbox__trigger"></div>
                                        <div class="checkbox__label p --m ml-14">Даю согласие на <a href="#" class="link --color-dark"><b>обработку персональных данных</b></a></div>
                                    </div>
                                </label>
                            </div>
                            <div class="auth__policy mt-8">
                                <label class="checkbox --color-dark">
                                    <input type="checkbox" checked="checked">
                                    <div class="flex --align-center">
                                        <div class="checkbox__trigger"></div>
                                        <div class="checkbox__label p --m ml-14">Подписаться на рассылку <a href="#" class="link --color-dark"><b>выгодных предложений</b></a></div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <button class="personal-field__btn btn --fill-1 --xl">
                            <span class="p --xl">Сохранить изменения</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>