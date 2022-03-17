<?php 
    $price_from = $filter_prices['min'];
    $price_to = $filter_prices['max'];
    $selected_colors = [];
    $selected_countries = [];
    if ($_GET['filter']) {
        $filter = json_decode($_GET['filter']);
        foreach ($filter as $key => $f) {
            if ($f->type == 'price') {
                $price_from = $f->values->min;
                $price_to = $f->values->max;
            }
            if ($f->type == 'countries') {
                $values = $f->values;
                foreach ($values as $key => $v) {
                    array_push($selected_countries, $v);
                }
            }
            if ($f->type == 'colors') {
                $values = $f->values;
                foreach ($values as $key => $v) {
                    array_push($selected_colors, $v);
                }
            }
        }
    }
    // print_r($selected_countries);
    
?>
<div class="catalog-filter py-16">
    <div class="catalog-filter__mob-btn --js flex --align-center --just-space">
        <div class="catalog-filter__mob-btn-label">Фильтр</div>
        <div class="catalog-filter__mob-btn-icon"></div>
    </div>
    <div class="catalog-filter__wrap">
        <div class="center-wrap">
            <div class="catalog-filter__sub-wrap flex --align-center --just-space">
                <div class="catalog-filter__rangeslider col --3">
                    <input type="text" class="js-range-slider" name="cost" value=""
                        data-type="double"
                        data-min="<?=$filter_prices['min']?>"
                        data-max="<?=$filter_prices['max']?>"
                        data-from="<?=$price_from?>"
                        data-to="<?=$price_to?>"
                        data-grid="true"
                    />
                </div>
                <div class="catalog-filter__filters grid --temp-col-4 col --8">
                    <div class="filter-item --filter_brands">
                        <div class="filter-item__label --p">Производитель:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производитель:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>0</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <? 
                                                foreach ($filter_brands as $key => $el) { 
                                            ?>
                                                <label class="checkbox --color-dark mt-8">
                                                    <input type="checkbox" name="product_type" value="<?=$el?>">
                                                    <div class="flex --align-center">
                                                        <div class="checkbox__trigger"></div>
                                                        <div class="checkbox__label --p ml-16"><?=$el?></div>
                                                    </div>
                                                </label>
                                            <? } ?>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>    
                    <div class="filter-item --filter_country">
                        <div class="filter-item__label --p">Страна:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <? if (count($selected_countries) == 0) { ?>
                                <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <? } else { ?>
                                <div class="filter-item__name p --l mr-16">
                                    <? foreach ($selected_countries as $key => $val) { ?>
                                        <?=$val?>, 
                                    <? } ?>
                                </div>
                            <? } ?>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Страна:</div>
                                                <div class="tooltip__desc p --s">Выбранно: 
                                                    <? if (count($selected_countries) == 0) { ?>
                                                        <span>0</span>
                                                    <? } else { ?>
                                                        <span><?= count($selected_countries) ?></span>
                                                    <? } ?>
                                                </div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <? 
                                                foreach ($filter_country as $key => $el) { 
                                                    $is_selected = false;
                                                    foreach ($selected_countries as $key => $v) {
                                                        if ($el == $val) {
                                                            $is_selected = true;
                                                        }
                                                    }
                                            ?>
                                                <label class="checkbox --color-dark mt-8">
                                                    <input type="checkbox" <? if ($is_selected == true) {?> checked="checked" <? } ?>  name="product_type" value="<?=$el?>">
                                                    <div class="flex --align-center">
                                                        <div class="checkbox__trigger"></div>
                                                        <div class="checkbox__label --p ml-16"><?=$el?></div>
                                                    </div>
                                                </label>
                                            <? } ?>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>    
                    <div class="filter-item --filter_colors">
                        <div class="filter-item__label --p">Цвет:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <? if (count($selected_colors) == 0) { ?>
                                <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <? } else { ?>
                                <div class="filter-item__name p --l mr-16">
                                    <? foreach ($selected_colors as $key => $val) { ?>
                                        <?=$val?>, 
                                    <? } ?>
                                </div>
                            <? } ?>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Цвет:</div>
                                                <div class="tooltip__desc p --s">Выбранно: 
                                                    <? if (count($selected_colors) == 0) { ?>
                                                        <span>0</span>
                                                    <? } else { ?>
                                                        <span><?= count($selected_colors) ?></span>
                                                    <? } ?>
                                                </div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <? 
                                                foreach ($filter_colors as $key => $el) { 
                                                    $is_selected = false;
                                                    foreach ($selected_colors as $key => $v) {
                                                        if ($el == $val) {
                                                            $is_selected = true;
                                                        }
                                                    }
                                            ?>
                                                <label class="checkbox --color-dark mt-8">
                                                    <input type="checkbox" <? if ($is_selected == true) {?> checked="checked" <? } ?> name="product_type" value="<?=$el?>">
                                                    <div class="flex --align-center">
                                                        <div class="checkbox__trigger"></div>
                                                        <div class="checkbox__label --p ml-16"><?=$el?></div>
                                                    </div>
                                                </label>
                                            <? } ?>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>    
                    <div class="filter-item --filter_areas">
                        <div class="filter-item__label --p">Область массажа:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16"><? if (count($filter_areas) > 0) { ?>Выбрать<? } else { ?>Отсутствует<? } ?></div>
                            <div class="filter-item__icon-wrap">
                                <? if (count($filter_areas) > 0) { ?>
                                    <div class="filter-item__icon --svg__arrow"></div>
                                    <div class="filter-item__tooltip">
                                        <div class="tooltip">
                                            <div class="tooltip__head flex --align-center --just-space">
                                                <div class="tooltip__title-wrap">
                                                    <div class="tooltip__title --p">Область массажа:</div>
                                                    <div class="tooltip__desc p --s">Выбранно: <span>0</span></div>
                                                </div>
                                                <div class="tooltip__clear-btn btn">
                                                    <span>Сбросить</span>
                                                </div>
                                            </div>
                                            <div class="tooltip__list grid --temp-col-2 mt-48">
                                                <? foreach ($filter_areas as $key => $el) { ?>
                                                    <label class="checkbox --color-dark mt-8">
                                                        <input type="radio" name="product_type" value="<?=$el?>">
                                                        <div class="flex --align-center">
                                                            <div class="checkbox__trigger"></div>
                                                            <div class="checkbox__label --p ml-16"><?=$el?></div>
                                                        </div>
                                                    </label>
                                                <? } ?>
                                            </div>
                                            <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>    
                    <div class="filter-item --filter_scopes">
                        <div class="filter-item__label --p">Область применения:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16"><? if (count($filter_scopes) > 0) { ?>Выбрать<? } else { ?>Отсутствует<? } ?></div>
                            <div class="filter-item__icon-wrap">
                                <? if (count($filter_scopes) > 0) { ?>
                                    <div class="filter-item__icon --svg__arrow"></div>
                                    <div class="filter-item__tooltip">
                                        <div class="tooltip">
                                            <div class="tooltip__head flex --align-center --just-space">
                                                <div class="tooltip__title-wrap">
                                                    <div class="tooltip__title --p">Область применения:</div>
                                                    <div class="tooltip__desc p --s">Выбранно: <span>0</span></div>
                                                </div>
                                                <div class="tooltip__clear-btn btn">
                                                    <span>Сбросить</span>
                                                </div>
                                            </div>
                                            <div class="tooltip__list grid --temp-col-2 mt-48">
                                                <? foreach ($filter_scopes as $key => $el) { ?>
                                                    <label class="checkbox --color-dark mt-8">
                                                        <input type="radio" name="product_type" value="<?=$el?>">
                                                        <div class="flex --align-center">
                                                            <div class="checkbox__trigger"></div>
                                                            <div class="checkbox__label --p ml-16"><?=$el?></div>
                                                        </div>
                                                    </label>
                                                <? } ?>
                                            </div>
                                            <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>    
                    <? /*
                    <div class="filter-item">
                        <div class="filter-item__label --p">Материал обшивки:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Кожа, Пластиккккк</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Выбрано:</div>
                            <div class="filter-item__count">
                                <b>
                                    2 
                                    <span>ед.</span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item">
                        <div class="filter-item__label --p">Стиль:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item">
                        <div class="filter-item__label --p">Тип кресла:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item">
                        <div class="filter-item__label --p">Производство:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    */ ?>
                </div>
                <? /*
                <div class="catalog-filter__show-btn-wrap col --2 flex --just-end">
                    <div class="catalog-filter__show-btn btn --js">
                        <div class="catalog-filter__show-btn-label p --l mr-18">Развернуть</div>
                        <div class="show-btn__show-btn-icon --svg__plus"></div>
                    </div>
                </div>
                */ ?>
            </div>
            <? /*
            <div class="catalog-filter__sub-filters-wrap pt-40 mt-40 pb-56 col --12">
                <div class="catalog-filter__sub-filters-title h4">Характеристики</div>
                <div class="catalog-filter__sub-filters grid --temp-col-6 mt-24">
                    <!-- filter-item -->
                    <div class="filter-item">
                        <div class="filter-item__label --p">Материал обшивки:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Кожа, Пластиккккк</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Выбрано:</div>
                            <div class="filter-item__count">
                                <b>
                                    2 
                                    <span>ед.</span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item">
                        <div class="filter-item__label --p">Стиль:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item">
                        <div class="filter-item__label --p">Тип кресла:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item">
                        <div class="filter-item__label --p">Производство:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8 disable">
                                                <input type="checkbox" name="product_type" disabled value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item">
                        <div class="filter-item__label --p">Производство:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8 disable">
                                                <input type="checkbox" name="product_type" disabled value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item">
                        <div class="filter-item__label --p">Производство:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8 disable">
                                                <input type="checkbox" name="product_type" disabled value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item">
                        <div class="filter-item__label --p">Производство:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name p --l mr-16">Выбрать</div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8 disable">
                                                <input type="checkbox" name="product_type" disabled value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-filter__tags-wrap mt-48">
                    <div class="catalog-filter__tags-title h4">Теги</div>
                    <div class="catalog-filter__tags flex mt-8">
                        <!-- filter-tag -->
                        <div class="filter-tag --p">Название тега</div>
                        <!-- filter-tag -->
                        <div class="filter-tag --p">Название тега</div>
                        <!-- filter-tag -->
                        <div class="filter-tag --p">Название тега</div>
                        <!-- filter-tag -->
                        <div class="filter-tag --p">Название тега</div>
                    </div>
                </div>
            </div>
            */ ?>
        </div>
    </div>
    <!-- <div class="catalog-filter__mask"></div> -->
</div>