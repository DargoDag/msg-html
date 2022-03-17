<div class="contacts flex --just-space">
    <div class="contacts__info-wrap col --4">
        <div class="contacts__label h4">Центральный офис</div>
        <div class="contacts__items mt-24 pb-32">
            <!-- contact-item -->
            <div class="contact-item --map flex --align-center">
                <div class="contact-item__icon mr-24">
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/map.svg'); ?>
                </div>
                <div class="contact-item__value h5">Московская область, Каширское шоссе, д.7, город Домодедово</div>
            </div>
            <!-- contact-item -->
            <div class="contact-item --email flex --align-center">
                <div class="contact-item__icon mr-24">
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/email.svg'); ?>
                </div>
                <a href="mailto:info@massager.market" class="contact-item__value link h5">info@massager.market</a>
            </div>
            <!-- contact-item -->
            <div class="contact-item --tel flex --align-center">
                <div class="contact-item__icon mr-24">
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/tel.svg'); ?>
                </div>
                <a href="tel:88006004126" class="contact-item__value link h4 mr-16"><b>8 (800) 600 41 26</b></a>
                <div class="contact-item__messengers-items flex">
                    <!-- messenger-item -->
                    <a href="//www.instagram.com/massager.market/" target="_blank" class="messenger-item btn --svg__insta"></a>
                    <!-- messenger-item -->
                    <a href="//t.me/Massagermarket" target="_blank" class="messenger-item btn --svg__telega"></a>
                    <!-- messenger-item -->
                    <a href="//api.whatsapp.com/send?phone=89169758377&text=Здравствуйте!" target="_blank" class="messenger-item btn --svg__whatsapp"></a>
                </div>
            </div>
            <!-- contact-item -->
            <div class="contact-item --clock flex --align-center">
                <div class="contact-item__icon mr-24">
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/clock.svg'); ?>
                </div>
                <div class="contact-item__value p --xl">пн-вс: 9:00-21:00</div>
            </div>
        </div>
        <div class="contacts__requisites accordion mt-32">
            <div class="accordion__title --js flex --align-center">
                <div class="accordion__title-wrap flex --align-center mr-18">
                    <div class="accordion__icon mr-32">
                        <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/list.svg'); ?>
                    </div>
                    <div class="accordion__title-label p --xl"><b>Реквизиты компании</b></div>
                </div>
                <div class="accordion__title-icon"></div>
            </div>
            <div class="accordion__desc">
                <p>ИНН 462003103663 <br>ОГРНИП 315462000011481. <br> <br></b>Фактический адрес:</b> Московская область , Каширское шоссе, д.7, город Домодедово</p>
            </div>
        </div>
    </div>
    <div class="contacts__form-wrap col --6">
        <div class="contacts__label h4">По вопросам сотрудничества</div>
        <form action="#" method="post" name="form-8" class="contacts__form flex --just-space mt-24">
            <div class="popup__input-wrap --name col --3">
                <input class="popup__input input --fill" type="text" name="name" placeholder="Введите ваше имя">
            </div>
            <div class="popup__input-wrap --email col --3">
                <input class="popup__input input --fill" type="email" name="email" placeholder="E-mail:">
            </div>
            <div class="popup__textarea-wrap --message col --12 mt-16">
                <textarea name="message" placeholder="Сообщение" class="popup__input input --fill"></textarea>
            </div>
            <div class="popup__send-wrap flex --align-center --just-space col --6 mt-16">
                <div class="popup__checkbox col --2">
                    <label class="checkbox">
                        <input type="checkbox" checked="checked" name="private" required>
                        <div class="flex">
                            <div class="checkbox__trigger"></div>
                            <div class="checkbox__label p --m ml-16">Даю согласие на <a href="/policy/" target="_blank" class="checkbox__link link"><b>обработку персональных данных</b></a></div>
                        </div>
                    </label>
                </div>
                <button type="send" class="popup__send-btn btn feedback btn-success --fill-1 p --xl col --3">Зарегистрироваться</button>
            </div>
        </form>
    </div>
    <div class="contacts__map-wrap col --12 mt-40">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/map/__map.php'); ?>
    </div>
</div>