<div class="row">
    <div class="col-12 bg-custom pb-5 base-frame">
        <div class="row">
            <div class="col-12">
                <p class="h1 text-center mt-3">Зоны геолокации</p>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <button class="btn btn-secondary " id="howTo" data-toggle="modal" data-target=".how-to-modal">Как работать с зонами</button>
                    <button class="btn btn-secondary " id="delete-button" disabled>Удалить выбранную зону</button>
                    <button class="btn btn-secondary " id="updateUserLocation">Обновить города для всех пользователей</button>
                </div>
                <div class="well">
                    <div id="map_canvas"></div>
                </div>
                <div id="coords">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade how-to-modal" tabindex="-1" role="dialog" aria-labelledby="howToModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Как работать с зонами</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Для добавления зоны нужно нажать кнопку с пятиугольником "Нарисуйте фигуру" и нарисовать на карте нужную зону (должно быть не менее трех точек). При замыкании зоны появится окно, в котором нужно ввести название зоны - введенное название будет отображаться у поьзователях в приложении. Нажав на ОК зона будет создана, нажав на отмену, нарисованная зона будет сброшена.</p>
                <p>Для редактирования зоны нужно кликнуть на зону, по контуру зоны появятся белые и серые маркеры. Белые маркеры это существующие точки края зоны, их можно перемещать, для добавления новой точки между двумя существующими нужно потянуть за серый маркер. Для удаления точки нужно нажать на ней правой кнопкой. Координаты зоны обновляются после каждого редактирования, добавления или удаления точки</p>
                <p>Белые маркеры "магнитные" - при перемещении маркера на площадь другой зоны достаточно близко к точке края этой зоны (5 км и ближе), маркер будет установлен на этой точке.</p>
                <figure>
                    <p><img src="images/magnet-rule-1.jpg" alt=""></p>
                    <figcaption>Перемещаем маркер на другую зону</figcaption>
                </figure>
                <figure>
                    <p><img src="images/magnet-rule-2.jpg" alt=""></p>
                    <figcaption>Отпустив маркер, он автоматически сдвинется к ближайшей точке края</figcaption>
                </figure>
                <p>Для редактирования названия зоны нужно нажать правой кнопкой на зоне - появится окно ввода названия, как при добавлении зоны</p>
                <p>Для удаления зоны нужно выделить зону и нажать "Удалить выбранную зону</p>
                <strong>После редактирования зон нужно обновить данные о городе для каждого пользователя - достаточно нажать кнопку "обновить города для всех пользователей".</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<style>
    #map_canvas {
        width: 100%;
        height: 75vh;
    }
</style>