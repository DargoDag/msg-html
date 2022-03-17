<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/stores/items.php'); ?>
<div class="stores">
    <div class="stores__metro-filters-wrap flex --align-center --just-center">
        <div class="metro-filter flex --align-center --just-center is-active">
            <div class="metro-filter__wrap flex --align-center">
                <div class="metro-filter__icon --svg__location mr-12"></div>
                <div class="metro-filter__label p --l">Все магазины</div>
            </div>
        </div>
        <div class="stores__metro-filters flex --align-center --just-center">
            <?php foreach ($shops as $key => $item) { ?>
                <!-- metro-filter -->
                <div class="metro-filter flex --align-center --just-center" data-filter="<?= $item['station'] ?>">
                    <div class="metro-filter__wrap flex --align-center">
                        <div class="metro-filter__icon --svg__location mr-12"></div>
                        <div class="metro-filter__label p --l"><?= $item['station'] ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="stores__items grid --temp-col-3 --gap-24 mt-32">
        <?php foreach ($shops as $key => $item) { ?>
            <!-- store-item -->
            <div class="store-item flex --direction-column">
                <div class="store-item__bg-items">
                    <?php foreach ($item['imgs'] as $key => $img) { ?>
                        <!-- bg-item -->
                        <div class="bg-item"></div>
                        <picture class="bg-item__img-thumb lazy">
                            <source srcset="/template/dist/img/<?= $img ?>.webp" type="image/webp">
                            <source srcset="/template/dist/img/<?= $img ?>.jpg" type="image/jpg">
                        </picture>
                    <?php } ?>
                </div>
                <div class="store-item__info flex --direction-column --just-space">
                    <div class="store-item__info-content">
                        <div class="store-item__head pb-24">
                            <div class="store-item__title h5"><?= $item['name'] ?></div>
                            <div class="store-item__mode-items mt-12">
                                <!-- mode-item -->
                                <div class="mode-item --location flex --align-center">
                                    <div class="mode-item__icon --svg__location mr-12"></div>
                                    <div class="mode-item__label --p"><?= $item['station'] ?></div>
                                </div>
                                <!-- mode-item -->
                                <div class="mode-item --timing flex --align-center mt-8">
                                    <div class="mode-item__icon --svg__clock-mode mr-12"></div>
                                    <div class="mode-item__label --p"><?= $item['work_mode'] ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="store-item__desc-wrap mt-16">
                            <div class="store-item__desc --p"><b>В данном шоу-руме представленны бренды:</b> <br><?= $desc ?></div>
                            <div class="store-item__brands-items grid --temp-col-5 --gap-6 mt-24">
                                <?php foreach ($item['brands'] as $key => $brand) { ?>
                                    <!-- brand-item -->
                                    <div class="brand-item">
                                        <picture class="brand-item__thumb lazy">
                                            <source srcset="/template/dist/img/<?= $brand ?>.webp" type="image/webp">
                                            <source srcset="/template/dist/img/<?= $brand ?>.png" type="image/png">
                                        </picture>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="store-item__footer mt-16">
                        <div class="store-item__contacts">
                            <div class="store-item__tel flex --align-center --just-center">
                                <a class="link p --l" href="tel:88006004126">8 (800) 600 41 26</a>
                                <span>Звонок бесплатный</span>
                            </div>
                            <div class="contact-item__messengers-items flex --align-center --just-center">
                                <!-- messenger-item -->
                                <a href="//t.me/Massagermarket" target="_blank" class="messenger-item btn --svg__telega"></a>
                                <!-- messenger-item -->
                                <a href="//api.whatsapp.com/send?phone=89169758377&text=Здравствуйте!" target="_blank" class="messenger-item btn --svg__whatsapp"></a>
                            </div>
                        </div>
                        <div class="store-item__btns flex --align-center --just-space mt-32">
                            <a href="#get-address" data-popup="#get-address" data-city="<?= $item['station'] ?>" class="store-item__more-btn --js__get-address btn p --l">Получить адрес по смс</a>
                            <!-- <div class="store-item__map-btn btn">
                                <div class="store-item__map-btn-icon --svg__location mr-12"></div>
                                <div class="store-item__map-btn-label --p">Показать <br>на карте</div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <? /*
    <div class="stores__pagination mt-48">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/pagination/__pagination.php'); ?>
    </div>
    */ ?>
</div>