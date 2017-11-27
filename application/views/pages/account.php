<div class="container">
    <div class="row my_row_bg">
        <div class="col-lg-2">

        </div>
        <div class="my_center_container col-lg-8">
            <h1>Мой аккаунт</h1>
            <form class="form-horizontal" method="post" action="<?=base_url()?>account/update" name="account">
<!--                name-->
                <div class="form-group <?php if(form_error('update[name]')){echo 'has-error';} ?>">
                    <label for="inputName" class="col-sm-2 control-label">Имя</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputName" name="update[name]" maxlength="25"
                                   value="<?=isset($user->name) ? $user->name : set_value('update[name]')?>"
                                   <?php if(!isset($_POST['update']['name'])){echo 'disabled';} ?> >
                            <span class="input-group-btn">
                                <button id="accNameBtn" class="btn btn-default" type="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                        <?=form_error('update[name]','<span class="label label-danger">', '</span>'); ?>
                    </div>
                </div>
<!--                email-->
                <div class="form-group <?php if(form_error('update[email]')){echo 'has-error';} ?>">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="email" class="form-control" id="inputEmail" name="update[email]" maxlength="25"
                                   value="<?=isset($user->email) ? $user->email : set_value('update[email]')?>"
                                   <?php if(!isset($_POST['update']['email'])){echo 'disabled';} ?>>
                            <span class="input-group-btn">
                                <button id="accEmailBtn" class="btn btn-default" type="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                        <?=form_error('update[email]','<span class="label label-danger">', '</span>'); ?>
                    </div>
                </div>
<!--                password1-->
                <div class="form-group <?php if(form_error('update[password1]')){echo 'has-error';} ?>">
                    <label for="inputPassword" class="col-sm-2 control-label">Сменить пароль</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="password" class="form-control" id="inputPassword" name="update[password1]" maxlength="45"
                                   value="<?=set_value('update[password1]')?>" <?php if(!isset($_POST['update']['password1'])){echo 'disabled';} ?>>
                            <span class="input-group-btn">
                                <button id="accPasswordBtn" class="btn btn-default" type="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                        <?=form_error('update[password1]','<span class="label label-danger">', '</span>'); ?>
                    </div>
                </div>
<!--                password2-->
                <div class="form-group <?php if(form_error('update[password2]')){echo 'has-error';} ?>">
                    <label for="inputPassword2" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword2" name="update[password2]" maxlength="45"
                               value="<?=set_value('update[password2]')?>" <?php if(!isset($_POST['update']['password2'])){echo 'disabled';} ?>>
                        <?=form_error('update[password2]','<span class="label label-danger">', '</span>'); ?>
                    </div>
                </div>
<!--                phone-->
                <div class="form-group  <?php if(form_error('update[phone]')){echo 'has-error';} ?>">
                    <label for="inputPhone" class="col-sm-2 control-label">Телефон</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputPhone" name="update[phone]"
                                   value="<?=isset($user->phone) ? $user->phone : set_value('update[phone]')?>"
                                   <?php if(!isset($_POST['update']['phone'])){echo 'disabled';} ?>>
                            <span class="input-group-btn">
                                <button id="accPhoneBtn" class="btn btn-default" type="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                        <?=form_error('update[phone]','<span class="label label-danger">', '</span>'); ?>
                    </div>
                </div>
<!--                city-->
                <div class="form-group <?php if(form_error('update[city]')){echo 'has-error';} ?>">
                    <label for="selectCity" class="col-sm-2 control-label">Город</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <select class="form-control" id="selectCity" name="update[city]" disabled>
                                <?php foreach ($cities as $city){?>
                                    <option <?php if($city['id_cities'] == $user->id_cities){echo 'selected';}?> value="<?=$city['id_cities']?>"><?=$city['city']?></option>
                                <?}?>
                            </select>
                            <span class="input-group-btn">
                                <button id="accCityBtn" class="btn btn-default" type="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                        <?=form_error('update[city]','<span class="label label-danger">', '</span>'); ?>
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