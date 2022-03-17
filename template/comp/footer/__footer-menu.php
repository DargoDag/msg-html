<?php
    $sections_list = json_decode(file_get_contents(API.'/api/get-sections.php'), true);
?>
<div class="footer-menu mt-56">
    <div class="center-wrap flex --align-stretch --just-space pb-56">
        <div class="footer-menu__logo-wrap col --3">
            <a href="/" class="footer-menu__logo link --svg__logo"></a>
            <div class="footer-menu__copyright-wrap">
                <div class="footer-menu__copyright p --l">© 2022 Все права защищены</div>
                <a href="/policy/" class="footer-menu__policy link --p mt-12">Политика конфиденциальности</a>
                <a href="/coockie/" class="footer-menu__cookie link --p mt-4">Использование куки</a>
            </div>
        </div>
        <div class="footer-menu__items-wrap flex --align-end --just-space col --8">
            <div class="footer-menu__items grid --temp-col-2 col --4">
                <a href="/about/" class="menu-item link h5">О магазине</a>
                <a href="/blog/" class="menu-item link h5">Блог</a>
                <a href="/jobs/" class="menu-item link h5">Вакансии</a>
                <a href="/faq/" class="menu-item link h5">Вопрос ответ</a>
                <a href="/installment/" class="menu-item link h5">Рассрочка</a>
                <a href="/service/" class="menu-item link h5">Гарантия</a>
                <a href="/sales/" class="menu-item link h5">Распродажа</a>
                <a href="/contacts/" class="menu-item link h5">Контакты</a>
            </div>
            <div class="footer-menu__sub-items grid --temp-col-2 col --4">
                <? foreach ($sections_list as $key => $item) { ?>   
                    <a href="/catalog/<?=$item['code']?>/" class="sub-item link --p"><?=$item['name']?></a>
                <? } ?>
            </div>
        </div>
    </div>
</div>