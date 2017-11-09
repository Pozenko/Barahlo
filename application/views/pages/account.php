<div class="container">
    <div class="row my_row_bg">
        <div class="col-lg-2">

        </div>
        <div class="my_center_container col-lg-8">
            <h1>Мой аккаунт</h1>
            <form class="form-horizontal" action="" name="account">
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Имя</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputName" name="name" maxlength="25" disabled>
                            <span class="input-group-btn">
                                <button id="accNameBtn" class="btn btn-default" type="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="email" class="form-control" id="inputEmail" name="email" maxlength="25" disabled>
                            <span class="input-group-btn">
                                <button id="accEmailBtn" class="btn btn-default" type="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Пароль</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="password" class="form-control" id="inputPassword" name="password" maxlength="16" disabled>
                            <span class="input-group-btn">
                                <button id="accPasswordBtn" class="btn btn-default" type="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword2" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword2" name="password2" maxlength="16" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPhone" class="col-sm-2 control-label">Телефон</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputPhone" name="phone" disabled>
                            <span class="input-group-btn">
                                <button id="accPhoneBtn" class="btn btn-default" type="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="selectCity" class="col-sm-2 control-label">Город</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <select class="form-control" id="selectCity" name="city" disabled>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <span class="input-group-btn">
                                <button id="accCityBtn" class="btn btn-default" type="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group text-right">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn my_btn">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
</div>