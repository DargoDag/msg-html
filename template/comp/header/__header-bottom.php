<?php
    $popular_ids = json_encode(array(499392950, 499399017, 499400031, 510534696, 510534753, 499936391, 499367093, 499369387, 499370154, 516870936, 516870974, 501462632, 502320953, 502321252, 506486459, 506489205, 489186074, 489762583, 489617829));
    $populars = json_decode(file_get_contents(API.'/api/get-items.php?ids='.$popular_ids), true);
    $sections_list = json_decode(file_get_contents(API.'/api/get-sections.php'), true);
?>
<div class="header-bottom mt-8">
    <div class="center-wrap flex --align-center --just-space">
        <div class="header-bottom__catalog-wrap col --3">
            <div class="header-bottom__catalog <?= $modifier ?>">
                <div class="header-bottom__catalog-head flex --align-center --just-space <?= $modifier ?>">
                    <div class="header-bottom__catalog-edge --svg__edge-left --left <?= $modifier ?>"></div>
                    <div class="header-bottom__catalog-label-wrap flex --align-center">
                        <div class="header-bottom__catalog-icon --svg__catalog mr-16"></div>
                        <div class="header-bottom__catalog-label p --l">Все категории</div>
                    </div>
                    <div class="header-bottom__catalog-btn btn --svg__arrow"></div>
                    <div class="header-bottom__catalog-edge --svg__edge-right --right <?= $modifier ?>"></div>
                </div>
                <div class="header-bottom__catalog-items">
                    <? foreach ($sections_list as $key => $item) { ?>
                        <div class="catalog-item">
                            <a href="/catalog/<?=$item['code']?>/" class="catalog-item__head link --color-dark flex --align-center --just-space">
                                <? /*
                                <div class="catalog-item__label <? if ($key <= 2) { ?>--main  p --l <? } else { ?> --p <?}?>"><b><?=$item['name']?></b></div>
                                */?>
                                <div class="catalog-item__label --main  p --l"><b><?=$item['name']?></b></div>
                                <div class="catalog-item__icon --svg__arrow-90"></div>
                            </a>
                            <div class="catalog-sub flex --just-space">
                                <div class="catalog-sub__wrap flex --just-space">
                                    <div class="catalog-sub__items col --5">
                                        <div class="catalog-sub__title h4"><?=$item['name']?></div>
                                        <div class="sub-items grid --temp-col-2 mt-24">
                                            <!-- sub-item -->
                                            <div class="sub-item__wrap">
                                                <div class="sub-item__label p --xl">По цене</div>
                                                <a href='/catalog/<?=$item["code"]?>/?props=true&filter=[{"type":"price","values":{"min":0,"max":500000}}]' class="sub-item link --p mt-8">Недорогие</a>
                                                <a href='/catalog/<?=$item["code"]?>/?props=true&filter=[{"type":"price","values":{"min":100000,"max":1500000}}]' class="sub-item link --p mt-8">Средние</a>
                                                <a href='/catalog/<?=$item["code"]?>/?props=true&filter=[{"type":"price","values":{"min":500000,"max":2000000}}]' class="sub-item link --p mt-8">Элитные</a>
                                            </div>
                                            <!-- sub-item -->
                                            <div class="sub-item__wrap">
                                                <div class="sub-item__label p --xl">Производитель</div>
                                                <a href='/catalog/<?=$item["code"]?>/?props=true&filter=[{"type":"countries","values":["Германия"]}]' class="sub-item link --p mt-8">Немецкие</a>
                                                <a href='/catalog/<?=$item["code"]?>/?props=true&filter=[{"type":"countries","values":["Япония"]}]' class="sub-item link --p mt-8">Японские</a>
                                                <a href='/catalog/<?=$item["code"]?>/?props=true&filter=[{"type":"countries","values":["Китай"]}]' class="sub-item link --p mt-8">Китайские</a>
                                            </div>
                                            <!-- sub-item -->
                                            <div class="sub-item__wrap">
                                                <div class="sub-item__label p --xl">Цвет</div>
                                                <a href='/catalog/<?=$item["code"]?>/?props=true&filter=[{"type":"colors","values":["Белый"]}]' class="sub-item link --p mt-8">Белый</a>
                                                <a href='/catalog/<?=$item["code"]?>/?props=true&filter=[{"type":"colors","values":["Бежевый"]}]' class="sub-item link --p mt-8">Бежевый</a>
                                                <a href='/catalog/<?=$item["code"]?>/?props=true&filter=[{"type":"colors","values":["Серый"]}]' class="sub-item link --p mt-8">Серый</a>
                                                <a href='/catalog/<?=$item["code"]?>/?props=true&filter=[{"type":"colors","values":["Черный"]}]' class="sub-item link --p mt-8">Черный</a>
                                            </div>
                                            <!-- sub-item -->
                                            <!-- <div class="sub-item__wrap">
                                                <div class="sub-item__label p --xl">Особенности</div>
                                                <a href="#" class="sub-item link --p mt-8">Ортопедические</a>
                                                <a href="#" class="sub-item link --p mt-8">3D-кресла</a>
                                                <a href="#" class="sub-item link --p mt-8">Для больших людей</a>
                                                <a href="#" class="sub-item link --p mt-8">Braintronics</a>
                                                <a href="#" class="sub-item link --p mt-8">Массажное кресло-качалка</a>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="catalog-sub__sales-banner col --3 flex --just-center">
                                        <?php $carusel = $populars; include($_SERVER['DOCUMENT_ROOT'].'/template/comp/sale-carousel/__sale-carousel-menu.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
                <div class="header-bottom__catalog-shade"></div>
            </div>
        </div>
        <div class="header-bottom__menu-items flex --align-center col --6 pl-32">
            <a href="/shops/" class="menu-item link --p">Магазины</a>
            <!-- <a href="/Акции.php" class="menu-item link flex --align-center"> -->
            <a href="/sales/" class="menu-item link flex --align-center">
                <div class="menu-item__label --p mr-12">Акции</div>
                <div class="menu-item__count --p">16</div>
            </a>
            <a href="/brands/" class="menu-item link --p">Бренды</a>
            <a href="/trade-in/" class="menu-item link --p">Трейд-ин</a>
            <a href="/test-drive/" class="menu-item link --p">Тест-драйв</a>
        </div>
        <div class="header-bottom__contacts flex --align-center --just-end col --3">
            <div class="header-bottom__messengers-items flex mr-12">
                <a href="//www.instagram.com/massager.market/" target="_blank" class="messenger-item btn --svg__insta"></a>
                <a href="//t.me/Massagermarket" target="_blank" class="messenger-item btn --svg__telega"></a>
                <a href="//api.whatsapp.com/send?phone=89169758377&amp;text=Здравствуйте!" target="_blank" class="messenger-item btn --svg__whatsapp"></a>
            </div>
            <a href="tel:88006004126" class="header-bottom__tel link p --l"><b>8 (800) 600 41 26</b></a>
        </div>
    </div>
</div>