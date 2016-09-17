<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Event",
  "name": "Le dodgeball Beach Tournament 2016",
  "startDate" : "2016-06-18T10:00",
  "url" : "http://dodgeball.ch",
  "location" : {
  "@type" : "Place",
    "name" : "Plage de Portalban",
    "address" : "Route du Port 51, 1568 Portalban"
  },
  "offers": {
    "@type": "Offer",
    "price": "35.00",
    "priceCurrency": "CHF",
    "url": "http://www.dodgeball.ch#inscription"
  }
}
</script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-41599779-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5&appId=1403021633300512";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<script src="https://maps.googleapis.com/maps/api/js?v=3"></script>
<script>
    //-----------MAP-----------//


        function initialize() {
            var isDraggable = $(document).width() > 550 ? true : false;

            var mapOptions = {
                zoom: 13,
                scrollwheel: false,
                navigationControl: false,
                mapTypeControl: false,
                scaleControl: false,
                draggable: isDraggable,
                center: new google.maps.LatLng(46.922443, 6.953849),
                styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
            };


            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var image = '<?php echo BASE_URL.'/application/themes/afdbba/dist/img/marker.png' ?>';
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(46.922443, 6.953849),
                map: map,
                title: 'Dodgeball Beach Tounament',
                icon: image
            });

            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
        google.maps.event.addDomListener(window, "load", initialize);






</script>
<script src="<?php echo $this->getThemePath()?>/dist/js/main.js"></script>



<?php Loader::element('footer_required'); ?>

</body>
</html>