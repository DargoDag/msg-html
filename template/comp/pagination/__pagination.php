<? if ($items) { ?>
    <?php
        if (!isset($_GET['count'])) {
            $count = 12;
        } else {
            $count = $_GET['count'];
        }
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }
        $pages_counts = round($items_length / $count);
        if ($page <= 3) {
            $page_start = 1;
            if ($pages_counts > 5) {
                $page_end = 5;
            } else {
                $page_end = $pages_counts;
            }
        } else {
            $page_start = $page - 2;
            if ($page + 2 <= $pages_counts) {
                $page_end = $page + 2;
            }
            if ($page == $pages_counts - 1) {
                $page_start = $page - 3;
                $page_end = $pages_counts;
            }
            if ($page == $pages_counts) {
                $page_start = $page - 4;
                $page_end = $pages_counts;
            }
        }
    ?>
    <? if ($pages_counts > 0 ) { ?>
        <div class="pagination flex --align-center --just-space mt-64">
            <div class="pagination__actions flex --just-space --align-center col --3">
                <div class="pagination__pages flex --align-center">
                    <? for ($i=$page_start; $i <= $page_end; $i++) { ?>
                        <a href="?page=<?=$i?>&count=<?=$count?>" class="pagination__page-link <?if($page == $i){?> is-active <?}?> link"><?=$i?></a>
                    <? } ?>
                </div>
            </div>
            <? if ($page != $pages_counts) { ?>
                <div data-href="?page=<?=$page + 1?>&count=<?=$count?>" class="pagination__load-more flex --align-center --just-center col --6">
                    <i class="pagination__icon mr-12"></i>
                    <span class="pagination__label">Показать еще</span>
                </div>
            <? } ?>
            <div class="pagination__show-in flex --align-center --just-end col --3">
                <div class="pagination__show-in-label --p mr-16">Выводить по: </div>
                <div class="pagination__show-in-wrap flex">
                    <select name="count" class="pagination__show-in-select select --border --svg__arrow">
                        <option <?if($count == 2) { ?> selected="selected" <?}?> value="2">2</option>
                        <option <?if($count == 4) { ?> selected="selected" <?}?> value="4">4</option>
                        <option <?if($count == 8) { ?> selected="selected" <?}?> value="8">8</option>
                        <option <?if($count == 12){ ?> selected="selected" <?}?> value="12">12</option>
                        <option <?if($count == 24){ ?> selected="selected" <?}?> value="24">24</option>
                        <option <?if($count == 32){ ?> selected="selected" <?}?> value="32">32</option>
                    </select>
                </div>
            </div>
        </div>
    <? } ?>
<? } ?>