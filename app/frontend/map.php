<div class="row">
    <div class="col-12">
        <p class="h1 mt-3">Карта пользователей</p>
    </div>
</div>
<div class="row ">
    <div class="col-12">
        <div id="geo" style="min-height: 80vh"></div>
    </div>
</div>
<script>
    function initMap() {
        var geoPoint = {
            lat: 55.75,
            lng:37.62
        };
        var mapOptions = {
            center:geoPoint,
            scrollwheel:true,
            zoom:11
        };
        map = new google.maps.Map(document.getElementById('geo'),mapOptions);
        markers = [];
        <?php foreach ($usersGeo as $user): ?>
        var marker = new google.maps.Marker({
            position:{
                lat:<?php echo $user['lat'];?>,
                lng:<?php echo $user['lng'];?>
            },
            map:map,
            label:'id:<?php echo $user['user_id'] ?>, <?php echo date('d.m h:i', $user['user_last_visit']) ?>',
            icon: {
                path: google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,
                fillColor: "red",
                strokeColor: "red",
                fillOpacity: 1.0,
                scale: 5
            },
        });
        markers.push(marker);
        <?php endforeach; ?>
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?&libraries=drawing&key=AIzaSyCleZZMKiDEY1pMVIEhXD8LgMvM0uKHYbI&callback=initMap"></script>
