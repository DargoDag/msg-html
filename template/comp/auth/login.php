<div class="auth col --4">
    <div class="auth__head">
        <h1 class="auth__title h2"><b>Авторизация</b></h1>
        <p class="auth__post-title p --l mt-8">Войдите в личный кабинет, используя электронную почту и пароль, или <a href="#" class="link --color-dark"><b>зарегистрируйтесь</b></a></p>
    </div>
    <div class="auth__form-notifications mt-32">
        <div class="alert --state-error --svg__alert--info">
            <div class="alert__content">
                <p>Регистрация временно закрыта</p>
            </div>
            <a href="#" class="alert__close js-alert-close --svg__alert--close"></a>
        </div>
    </div>
    <form action="#" class="auth__form 32">
        <div class="auth__form-line mt-12">
            <div class="big-input --no-radius --no-border">
                <input type="text" class="big-input__input" placeholder="_@_._">
                <div class="big-input__title">E-mail</div>
            </div>
        </div>
        <div class="auth__form-line mt-12">
            <div class="big-input --no-radius --no-border --password">
                <input type="password" class="big-input__input" placeholder="Введите пароль">
                <div class="big-input__title">Пароль</div>
                <i class="show-password js-show-password --svg__eye"></i>
            </div>
        </div>
        <button class="auth__form-send-btn mt-24 btn --fill-1 --xl">
            <span class="p --xl">Войти</span>
        </button>
        <div class="auth__form-bottom mt-16 flex --just-space --align-center">
            <div class="auth__form-remebmer">
                <label class="checkbox --color-dark">
                    <input type="checkbox" checked="checked">
                    <div class="flex --align-center">
                        <div class="checkbox__trigger"></div>
                        <div class="checkbox__label --p ml-16"><b>Запомнить меня</b></div>
                    </div>
                </label>
            </div>
            <a href="#" class="auth__form-last-password link --color-dark"><b>Забыли пароль?</b></a>
        </div>
    </form>
    <div class="auth__or">
        <div class="auth__or-label my-16 flex --align-center --just-space">
            <div class="auth__or-label-line col --auto"></div>
            <div class="auth__or-label-text mx-16"><b>или</b></div>
            <div class="auth__or-label-line col --auto"></div>
        </div>
        <div class="auth__or-btns">
            <a href="#" class="auth__or-btn auth__login-suid btn mt-8 --fill-4">
                <span class="p --l">Регистрация</span>
            </a>
        </div>
    </div>
</div>