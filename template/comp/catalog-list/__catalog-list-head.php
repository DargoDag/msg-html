<div class="catalog-list__head pt-40">
    <div class="center-wrap">
        <div class="catalog-list__head-wrap  flex --align-center --just-end">
            <? /*
            <div class="catalog-list__filters flex --align-center">
                <div class="catalog-list__filters-items flex mr-32">
                    <!-- filter-item -->
                    <div class="filter-item">
                        <div class="filter-item__label p --m mr-14">Кресло</div>
                        <div class="filter-item__clear-btn-wrap">
                            <div class="filter-item__clear-btn btn --svg__plus"></div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item">
                        <div class="filter-item__label p --m mr-14">Белый</div>
                        <div class="filter-item__clear-btn-wrap">
                            <div class="filter-item__clear-btn btn --svg__plus"></div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item">
                        <div class="filter-item__label p --m mr-14">Кожа</div>
                        <div class="filter-item__clear-btn-wrap">
                            <div class="filter-item__clear-btn btn --svg__plus"></div>
                        </div>
                    </div>
                </div>
                <div class="catalog-list__clear-btn btn">
                    <div class="catalog-list__clear-btn-label p --m mr-12">Очистить фильтры</div>
                    <div class="catalog-list__clear-btn-icon --svg__plus"></div>
                </div>
            </div>
            */ ?>
            <div class="catalog-list__tumblers flex --align-center">
                <? /*
                <div class="catalog-list__price-tumbler mr-32">
                    <label class="tumbler">
                        <input type="checkbox">
                        <div class="flex --align-center">
                            <div class="tumbler__trigger"></div>
                            <div class="tumbler__label --p ml-12">Цена со скидкой</div>
                        </div>
                    </label>
                </div>
                <div class="catalog-list__devider mr-32"></div>
                <div class="catalog-list__recommend-select mr-32">
                    <select class="select">
                        <option>Выпадающий</option>
                        <option>Выпадающий</option>
                        <option>Выпадающий</option>
                    </select>
                </div>
                */ ?>
                <div class="catalog-list__view-wrap flex --align-center">
                    <div class="catalog-list__view-label mr-12">Вид:</div>
                        <? if ($_COOKIE['products-view'] && $_COOKIE['products-view'] == 'list') { ?>
                            <div class="catalog-list__view-tumbler flex">
                                <label class="checkbox view-btn --grid --js">
                                    <input type="radio" name="view" value="grid">
                                    <div class="flex --align-center">
                                        <div class="checkbox__trigger --svg__view-1"></div>
                                    </div>
                                </label>
                                <label class="checkbox view-btn --list --js">
                                    <input type="radio" name="view" checked="checked" value="list">
                                    <div class="flex --align-center">
                                        <div class="checkbox__trigger --svg__view-2"></div>
                                    </div>
                                </label>
                            </div>
                        <? } else { ?>
                            <div class="catalog-list__view-tumbler flex">
                                <label class="checkbox view-btn --grid --js">
                                    <input type="radio" name="view" checked="checked" value="grid">
                                    <div class="flex --align-center">
                                        <div class="checkbox__trigger --svg__view-1"></div>
                                    </div>
                                </label>
                                <label class="checkbox view-btn --list --js">
                                    <input type="radio" name="view" value="list">
                                    <div class="flex --align-center">
                                        <div class="checkbox__trigger --svg__view-2"></div>
                                    </div>
                                </label>
                            </div>
                        <? } ?>
                </div>
            </div>
        </div>
    </div>
</div>