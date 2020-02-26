        <div class="row">
            <div class="col-12">
                <p class="h1 mt-3">Тестирование push-уведомлений</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <form>
                    <div class="form-group">
                        <select class="form-control" id="type">
                            <option selected disabled>Тип уведомления</option>
                            <option value="message">Новое сообщение</option>
                            <option value="match">Новая пара</option>
                            <option value="radarlike">Новый лайк с радара</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="toUser">ID получателя</label>
                        <input class="form-control" type="number" id="toUser">
                        <small class="form-text text-muted">
                            ID пользователя, которому отправляем push-уведомление
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="m-1" id="setNewFcmToken">
                        <label for="setNewFcmToken">Обновить этому пользователю в базе FCM registration token?</label>

                        <label for="toUser">FCM registration token</label>
                        <input class="form-control" id="fcmToken">
                        <small class="form-text text-muted">
                            Токен клиента в FCM. Если строка будет пустой, токен останется прежним
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="fromUser">ID пользователя в уведомлении</label>
                        <input class="form-control" type="number" id="fromUser">
                        <small class="form-text text-muted">
                            ID который будет передан в push-уведомлении:<br>
                            для нового сообщения - id сообщения<br>
                            для новой пары - id пользователя с кем появилась пара<br>
                            для нового лайка - id поставившего лайк
                        </small>
                    </div>
                    <button class="btn btn-outline-primary" id="sendPush">Отправить уведомление</button>
                </form>
            </div>
            <div class="col-6">
                <textarea class="form-control" rows="20" id="results"></textarea>
            </div>