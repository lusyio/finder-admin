        <div class="row">
            <div class="col-12">
                <p class="h1 mt-3">Тестирование сокетов</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <div class="alert alert-light" role="alert">
                    Эти сообщения не сохраняются в базе
                </div>
                <form>
                    <div class="form-group">
                        <label for="toUser">ID получателя</label>
                        <input class="form-control" type="number" id="toUser">
                    </div>
                    <div class="form-group">
                        <label for="fromUser">ID отправителя</label>
                        <input class="form-control" type="number" id="fromUser">
                    </div>
                    <div class="form-group">
                        <label for="fromUser">ID сообщения</label>
                        <input class="form-control" type="number" id="messageId">
                        <small class="form-text text-muted">
                            Для стороны сервера не имеет значения какой номер введен
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="text">Текст сообщения</label>
                        <textarea class="form-control" id="text" rows="5"></textarea>
                    </div>

                    <button class="btn btn-outline-primary" id="sendSocket">Отправить сообщение</button>
                </form>
            </div>
            <div class="col-6">
                <textarea class="form-control" rows="20" id="results"></textarea>
            </div>