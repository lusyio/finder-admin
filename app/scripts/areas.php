<script src="https://maps.googleapis.com/maps/api/js?&libraries=drawing"></script>
<script>
    $(document).ready(function () {
        var all_overlays = [];
        var selectedShape;
        var map;
        var drawingManager;
        var coordinates;
        function clearSelection() {
            if (selectedShape) {
                $('#delete-button').attr('disabled', true);
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
                selectedShape.setMap(null);
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

        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

        drawingManager = new google.maps.drawing.DrawingManager({
            drawingMode: google.maps.drawing.OverlayType.POLYGON,
            drawingControl: true,
            drawingControlOptions: {
                position: google.maps.ControlPosition.TOP_CENTER,
                drawingModes: [
                    google.maps.drawing.OverlayType.POLYGON
                ]
            },
            polygonOptions: {
                editable: true
            }
        });
        drawingManager.setMap(map);
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
        google.maps.event.addListener(drawingManager, 'polygoncomplete', function (polygon) {
            coordinates = (polygon.getPath().getArray());
            polygon.getPath().forEach(function (latLng, i) {
                console.log('lat ' + latLng.lat());
                console.log('lng' + latLng .lng());
            });
            console.log(coordinates);
            do {
                polygon.title = prompt('Имя города для заданной зоны');
                if (polygon.title === null) {
                    polygon.setMap(null);
                    return;
                }
            } while (polygon.title == '');
            polygon.addListener('rightclick', function (e) {
                do {
                    polygon.title = prompt('Имя города для заданной зоны', polygon.title);
                    if (polygon.title === null) {
                        polygon.setMap(null);
                        return;
                    }
                } while (polygon.title == '');
            });
            attachPolygonInfoWindow(polygon)


        });
        google.maps.event.addListener(drawingManager, 'drawingmode_changed', clearSelection);
        google.maps.event.addListener(map, 'click', clearSelection);
        google.maps.event.addDomListener(document.getElementById('delete-button'), 'click', function () {
           return (confirm('Восстановить будет невозможно - действительно удалить?')) ? deleteSelectedShape() : false;
        } );

        function attachPolygonInfoWindow(polygon) {
            var infoWindow = new google.maps.InfoWindow();
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
    });

</script>