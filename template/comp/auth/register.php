<div class="auth col --4">
    <div class="auth__head">
        <h1 class="auth__title h2"><b>Регистрация</b></h1>
        <p class="auth__post-title p --l mt-8">Заполните форму ниже или войдите, <br>если вы уже <a href="#" class="link --color-dark"><b>зарегистрированы</b></a></p>
    </div>
    <form action="#" class="auth__form mt-32">
        <div class="auth__form-line">
            <div class="big-input --no-radius --no-border">
                <input type="text" class="big-input__input" placeholder="Имя">
                <div class="big-input__title">Имя</div>
            </div>
        </div>
        <div class="auth__form-line mt-12">
            <div class="big-input --no-radius --no-border">
                <input type="text" class="big-input__input" placeholder="_@_._">
                <div class="big-input__title">E-mail</div>
            </div>
        </div>
        <div class="auth__form-line mt-12">
            <div class="big-input --tell --no-radius --no-border">
                <input type="text" class="big-input__input js-mask__tell --tell" placeholder="Телефон">
                <div class="big-input__title">Телефон</div>
            </div>
        </div>
        <div class="auth__form-line mt-12">
            <div class="big-input --no-radius --no-border --password">
                <input type="password" class="big-input__input" placeholder="Пароль">
                <div class="big-input__title">Пароль</div>
                <i class="show-password js-show-password --svg__eye"></i>
            </div>
        </div>
        <button class="auth__form-send-btn mt-24 btn feedback btn-success --fill-1 --xl"><span class="p --xl">Зарегистрироваться</span></button>
        <div class="auth__form-bottom mt-16 grid --gap-8">
            <div class="auth__policy">
                <label class="checkbox --color-dark">
                    <input type="checkbox" checked="checked">
                    <div class="flex --align-center">
                        <div class="checkbox__trigger"></div>
                        <div class="checkbox__label p --m ml-14">Даю согласие на <a href="/cookie.php" target="_blank" class="link --color-dark"><b>обработку персональных данных</b></a></div>
                    </div>
                </label>
            </div>
            <div class="auth__policy">
                <label class="checkbox --color-dark">
                    <input type="checkbox" checked="checked">
                    <div class="flex --align-center">
                        <div class="checkbox__trigger"></div>
                        <div class="checkbox__label p --m ml-14">Подписаться на рассылку <a href="/sales/" target="_blank" class="link --color-dark"><b>выгодных предложений</b></a></div>
                    </div>
                </label>
            </div>
        </div>
    </form>
    <div class="auth__or">
        <div class="auth__or-label my-16 flex --align-center --just-space">
            <div class="auth__or-label-line col --auto"></div>
            <div class="auth__or-label-text mx-16"><b>или</b></div>
            <div class="auth__or-label-line col --auto"></div>
        </div>
        <div class="auth__or-btns">
            <a href="/Авторизация.php" class="auth__or-btn auth__login-suid btn mt-18 --fill-4"><span class="--p">Войти</span></a>
        </div>
    </div>
</div>