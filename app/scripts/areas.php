<?php
$areaNamesDb = $db->allRows("SELECT area_id, area_name FROM areas");
$areaNames = [];
foreach ($areaNamesDb as $area) {
    $areaNames[$area['area_id']] = $area['area_name'];
}

$areaPointsDb = $db->allRows("SELECT point_id, area_id, lat, lng FROM area_points");
$areaPoints = [];
foreach ($areaPointsDb as $areaPoint) {
    if (!isset($areaPoints[$areaPoint['area_id']])) {
        $areaPoints[$areaPoint['area_id']] = [];
    }
    $areaPoints[$areaPoint['area_id']][] = [
        'lat' => $areaPoint['lat'],
        'lng' => $areaPoint['lng'],
    ];
}
?>
<script src="https://maps.googleapis.com/maps/api/js?&libraries=drawing&key=AIzaSyCleZZMKiDEY1pMVIEhXD8LgMvM0uKHYbI"></script>
<script>
    $(document).ready(function () {
        var all_overlays = [];
        var selectedShape;
        var map;
        var drawingManager;
        var coordinates;
        function clearSelection(e) {
            if (selectedShape) {
                if (e !== undefined) {
                    $('#delete-button').attr('disabled', true);
                }
                selectedShape.setEditable(false);
                selectedShape = null;
            } else {
                $('#delete-button').attr('disabled', false)
            }
        }

        function setSelection(shape) {
            clearSelection();
            selectedShape = shape;
            shape.setEditable(true);

        }

        function deleteSelectedShape() {
            if (selectedShape) {
                $.ajax({
                    type: "POST",
                    url: "ajax",
                    dataType: "json",
                    data: {
                        action: 'deleteArea',
                        areaId: selectedShape.areaId,
                    },
                    success: function (response) {
                        if (response.status === 'ok') {
                            selectedShape.setMap(null);
                        }
                    }
                });
            }
        }

        google.maps.Polygon.prototype.my_getBounds=function(){
            var bounds = new google.maps.LatLngBounds();
            this.getPath().forEach(function(element,index){bounds.extend(element)});
            return bounds
        };

        var latlng = new google.maps.LatLng(55.65, 37.5);
        var myOptions = {
            zoom: 8,
            center: latlng,
            disableDefaultUI: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var styledMapType = new google.maps.StyledMapType(
            [
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "weight": 2.5
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                }
            ],
            {name: 'Styled Map'});
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
        drawingManager = new google.maps.drawing.DrawingManager({
            // drawingMode: google.maps.drawing.OverlayType.POLYGON,
            drawingControl: true,
            drawingControlOptions: {
                position: google.maps.ControlPosition.TOP_CENTER,
                drawingModes: [
                    google.maps.drawing.OverlayType.POLYGON
                ]
            },
            polygonOptions: {
                editable: true,
                clickable: true,
                fillColor: '#6863ff',
                fillOpacity: 0.35,
                strokeWeight: 1,
                strokeOpacity: 0.35
            }
        });
        let polygonNames = <?= json_encode($areaNames) ?>;
        let polygonCoords = <?= json_encode($areaPoints) ?>;
        let newPolys = [];
        let polygons = [];
        for (let id in polygonCoords) {
            var newCoords = [];
            polygonCoords[id].forEach(function (point) {
                newCoords.push(new google.maps.LatLng(point.lat, point.lng));
            });
            newPolys[id] = new google.maps.Polygon({
                paths: newCoords,
                strokeWeight: 1,
                strokeOpacity: 0.35,
                fillColor: '#6863ff',
                fillOpacity: 0.35,
                editable: false,
                clickable: true,
                title: polygonNames[id],
                areaId: id,
            });
            newPolys[id].setMap(map);
            polygons.push(newPolys[id]);
            addNewPolys(newPolys[id]);
            attachPolygonInfoWindow(newPolys[id]);
            attachPolygonEditEvent(newPolys[id]);
            google.maps.event.addListener(newPolys[id], 'rightclick', function (mev) {
                if (mev.vertex != null) {
                    // this.getPath().removeAt(mev.vertex);
                }
            });
        }

        drawingManager.setMap(map);

        function addNewPolys(newPoly) {
            google.maps.event.addListener(newPoly, 'click', function() {
                setSelection(newPoly);
            });
        }
        google.maps.event.addListener(drawingManager, 'overlaycomplete', function (e) {
            all_overlays.push(e);
            if (e.type != google.maps.drawing.OverlayType.MARKER) {
                // Switch back to non-drawing mode after drawing a shape.
                drawingManager.setDrawingMode(null);

                // Add an event listener that selects the newly-drawn shape when the user
                // mouses down on it.
                var newShape = e.overlay;
                newShape.type = e.type;
                google.maps.event.addListener(newShape, 'click', function () {
                    setSelection(newShape);
                });
                setSelection(newShape);
            }
        });
        google.maps.event.addListener(drawingManager, 'markercomplete', function (polygon) {console.log(polygon)});
        google.maps.event.addListener(drawingManager, 'polygoncomplete', function (polygon) {
            let coordinates = [];
            polygon.getPath().forEach(function (latLng, i) {
                coordinates.push([latLng.lat(), latLng .lng()]);
            });
            do {
                polygon.title = prompt('Имя города для заданной зоны');
                if (polygon.title === null) {
                    polygon.setMap(null);
                    return;
                }
            } while (polygon.title == '');
            $.ajax({
                type: "POST",
                url: "ajax",
                dataType: "json",
                data: {
                    action: 'addArea',
                    areaName: polygon.title,
                    points: JSON.stringify(coordinates),
                },
                success: function (response) {
                    if (response.status === 'ok') {
                        attachPolygonInfoWindow(polygon);
                        polygon.areaId = response.areaId;
                        polygons.push(polygon);
                        addNewPolys(polygon);
                        attachPolygonInfoWindow(polygon);
                        attachPolygonEditEvent(polygon);
                    }
                }
            });
        });
        google.maps.event.addListener(drawingManager, 'drawingmode_changed', clearSelection);
        google.maps.event.addListener(map, 'click', clearSelection);
        google.maps.event.addDomListener(document.getElementById('delete-button'), 'click', function () {
           return (confirm('Восстановить будет невозможно - действительно удалить?')) ? deleteSelectedShape() : false;
        } );

        function attachPolygonInfoWindow(polygon) {
            var infoWindow = new google.maps.InfoWindow(
                {
                    disableAutoPan: true
                }
            );
            google.maps.event.addListener(polygon, 'mouseover', function (e) {
                infoWindow.setContent(polygon.title);
                var latLng = polygon.my_getBounds().getCenter();
                infoWindow.setPosition(latLng);
                infoWindow.open(map);
            });
            google.maps.event.addListener(polygon, 'mouseout', function (e) {
                infoWindow.close(map);
            });
        }
        function attachPolygonEditEvent(polygon) {
            polygon.addListener('rightclick', function (e) {
                if (e.vertex != null) {
                    this.getPath().removeAt(e.vertex);
                    return;
                }
                do {
                    let newTitle = prompt('Имя города для заданной зоны', polygon.title);
                    if (newTitle === null) {
                        return;
                    } else {
                        if (newTitle !== polygon.title) {
                            updateAreaName(polygon, newTitle);
                        }
                    }
                } while (polygon.title == '');
            });
            polygon.getPaths().forEach(function(path, index){
                google.maps.event.clearListeners(path, 'insert_at');
                google.maps.event.clearListeners(path, 'remove_at');
                google.maps.event.clearListeners(path, 'set_at');

                google.maps.event.addListener(path, 'insert_at', function(e){
                    let coordinates = [];
                    polygon.getPath().forEach(function (latLng, i) {
                        coordinates.push(latLng);
                    });
                    coordinates = connectWithNearestPoint(polygon, coordinates, e);

                    let simpleCoordinates = [];
                    coordinates.forEach(function (latLng, i) {
                        simpleCoordinates.push([latLng.lat(), latLng .lng()]);
                    });
                    updateArea(polygon.areaId, simpleCoordinates);
                });

                google.maps.event.addListener(path, 'remove_at', function(){
                    let coordinates = [];
                    polygon.getPath().forEach(function (latLng, i) {
                        coordinates.push([latLng.lat(), latLng .lng()]);
                    });
                    updateArea(polygon.areaId, coordinates);
                });

                google.maps.event.addListener(path, 'set_at', function(e){
                    let coordinates = [];
                    polygon.getPath().forEach(function (latLng, i) {
                        coordinates.push(latLng);
                    });
                    coordinates = connectWithNearestPoint(polygon, coordinates, e);

                    let simpleCoordinates = [];
                    coordinates.forEach(function (latLng, i) {
                        simpleCoordinates.push([latLng.lat(), latLng .lng()]);
                    });
                    updateArea(polygon.areaId, simpleCoordinates);
                });
            });
        }

        function connectWithNearestPoint(polygon, coordinates, e) {
            let newPoint = coordinates[e];

            // перебираем массив с полигонами
            polygons.forEach(function (p) {
                // проверяем входит ли эта точка в какой-либо полигон
                if (polygon.areaId === p.areaId) {
                    return;
                }
                if (google.maps.geometry.poly.containsLocation(newPoint, p)) {
                    // если входит то находим ближайшую вершину
                    let nearestPoint;
                    let currentDistance;
                    p.getPath().forEach(function (point, i) {
                        if (nearestPoint === undefined) {
                            nearestPoint = point;
                            currentDistance = getDistance(point, newPoint);
                        } else {
                            let newDistance = getDistance(point, newPoint);
                            if (newDistance < currentDistance) {
                                nearestPoint = point;
                                currentDistance = newDistance;
                            }
                        }
                    });
                    // если координаты отличаются не более чем заданное значение то
                    // присваиваем текущей точке координаты найденной точки

                    if (currentDistance > 0 && currentDistance < 5000 && nearestPoint) {
                        coordinates[e] = nearestPoint;
                        polygon.setPath(coordinates);
                        attachPolygonEditEvent(polygon);
                    }

                }
            });
            return coordinates;
        }

        function updateArea(areaId, coordinates) {
            $.ajax({
                type: "POST",
                url: "ajax",
                dataType: "json",
                data: {
                    action: 'updateAreaCoords',
                    areaId: areaId,
                    points: JSON.stringify(coordinates),
                },
                success: function (response) {
                    if (response === 'ok') {

                    }
                }
            });
        }

        function updateAreaName(polygon, areaName) {
            $.ajax({
                type: "POST",
                url: "ajax",
                dataType: "json",
                data: {
                    action: 'updateAreaName',
                    areaId: polygon.areaId,
                    areaName: areaName,
                },
                success: function (response) {
                    if (response.status === 'ok') {
                        polygon.title = areaName;
                    }
                }
            });
        }

        var rad = function(x) {
            return x * Math.PI / 180;
        };

        var getDistance = function(p1, p2) {
            var R = 6378137; // Earth’s mean radius in meter
            var dLat = rad(p2.lat() - p1.lat());
            var dLong = rad(p2.lng() - p1.lng());
            var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(rad(p1.lat())) * Math.cos(rad(p2.lat())) *
                Math.sin(dLong / 2) * Math.sin(dLong / 2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var d = R * c;
            return d; // returns the distance in meter
        };
    });

    $('#updateUserLocation').on('click', function () {
        let buttonEl = $('#updateUserLocation');
        let defaultButtonText = buttonEl.text();
        buttonEl.attr('disabled', true);
        buttonEl.text('.');
        let timerId = setInterval(() => {
            let buttonText = buttonEl.text();
            if (buttonText !== '...') {
                $('#updateUserLocation').text(buttonText + '.');
            } else {
                $('#updateUserLocation').text('.');
            }
        },250)

        $.ajax({
            type: "POST",
            url: "ajax",
            dataType: "json",
            data: {
                action: 'updateUserLocation',
            },
            success: function (response) {
                if (response.status === 'ok') {
                    clearInterval(timerId);
                    $('#updateUserLocation').text('Города успешно обновлены');
                    setTimeout(function () {
                        buttonEl.attr('disabled', false);
                        buttonEl.text(defaultButtonText);
                    },3000);
                } else {
                    clearInterval(timerId);
                    $('#updateUserLocation').text('Что-то пошло не так!');
                    setTimeout(function () {
                        buttonEl.attr('disabled', false);
                        buttonEl.text(defaultButtonText);
                    },6000);
                }
            }
        });
    })

</script>