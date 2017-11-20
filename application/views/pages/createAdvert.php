<div class="container">
    <div class="row my_row_bg">
        <div class="col-lg-2">

        </div>
        <div class="my_center_container col-lg-8">
            <h3>Добавить объявление</h3>
            <form class="form-horizontal" action="" name="create">
                <div class="form-group">
                    <label for="inputTitle" class="col-sm-2 control-label">Заголовок</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="title" maxlength="50">
                    </div>
                </div>
                <div class="form-group">
                    <label for="textDescription" class="col-sm-2 control-label">Описание</label>
                    <div class="col-sm-10">
                        <textarea id="textDescription" class="form-control" rows="5" name="description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="selectCategories" class="col-sm-2 control-label">Катерогия</label>
                    <div class="col-sm-10">
                        <select class="form-control input-sm" id="selectCategories" name="id_cat">
                            <option value="">Выберите категорию...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="selectSelleOption" class="col-sm-2 control-label">Тип сделки</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="selectSelleOption" name="sellingOptions">
                            <option value="">Тип сделки...</option>
                            <option value="1">Продажа</option>
                            <option value="2">Покупка</option>
                            <option value="3">Обмен</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="inputPrice" class="col-sm-2 control-label">Цена</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputPrice" name="price">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFile" class="col-sm-2 control-label">Фото</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="inputFile" aria-describedby="fileHelp" accept="image/jpeg, image/png"  multiple>
                        <small id="fileHelp" class="form-text text-muted">Загрузка фотографий в формате jpeg/png</small>
                    </div>
                </div>
                <div class="form-group text-right">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn my_btn">Добавить</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
</div>