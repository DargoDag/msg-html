<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/stores/items.php'); ?>
<div class="map">
    <div class="map-changer">
        <div id="map" style="width: 100%; height: 100%"></div>
    </div>
    <script type="text/javascript">
        setTimeout(function(){
        var elem = document.createElement('script');
        elem.type = 'text/javascript';
        elem.src = '//api-maps.yandex.ru/2.1/?lang=ru_RU&onload=getYaMap';
        document.getElementsByTagName('body')[0].appendChild(elem);
        }, 1500);
        function getYaMap(){
            ymaps.ready(init);
            var myMap;
            <?php foreach ($shops as $item): ?>
                var shop_<?=$item['shop']?>;
            <?php endforeach; ?> 
            function init(){     
                myMap = new ymaps.Map ("map", {
                    center: [55.769568, 37.567391],
                    zoom: 3,
                    controls: ['smallMapDefaultSet'],
                });
                myMap.behaviors.disable('scrollZoom')
                <?php foreach ($shops as $item): ?>
                    shop_<?=$item['shop']?> = new ymaps.Placemark([<?=$item['coords']?>], { 
                        content: '', 
                        iconContent: '12'    
                    }, {
                    iconLayout: 'default#image',
                    iconImageHref: '/template/dist/img/location.svg',
                    iconImageSize: [50, 70],
                    iconImageOffset: [-24, -85],
                    hideIconOnBalloonOpen: false,
                });              
                <?php endforeach; ?>    
                <?php foreach ($shops as $item): ?>
                    myMap.geoObjects.add(shop_<?=$item['shop']?>);
                <?php endforeach; ?>        
            }
            <?php foreach ($shops as $item): ?>
                $("#shop_<?=$item['shop']?>").click(function(){
                    myMap.setZoom(16);
                    myMap.setCenter(shop_<?=$item['shop'];?>.geometry.getCoordinates());
                    shop_<?=$item['shop'];?>.balloon.open();
                    $('.map-changer__item').removeClass('is-active');
                    $(this).addClass('is-active');
                });
                $("#shop_0").click(function(){
                    myMap.setZoom(12);
                    // myMap.setCenter([55.80562,37.43582802457796].getCoordinates());
                    $('.map-changer__item').removeClass('is-active');
                    $(this).addClass('is-active');
                }); 
            <?php endforeach; ?>
        }
    </script>
</div>