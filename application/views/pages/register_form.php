<div class="container">
    <div class="row my_row_bg">
        <div class="col-lg-2">

        </div>
        <div class="my_center_container col-lg-8">
            <h3>Регистрация</h3>
            <form class="form-horizontal" method="post" action="<?=base_url()?>register" name="registration">
                <div class="form-group <?php if(form_error('name')){echo 'has-error';} ?>">
                    <label for="inputName" class="col-sm-2 control-label">Имя</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="name" value="<?=set_value('name'); ?>" placeholder="Имя" maxlength="25">
                        <?=form_error('name','<span class="label label-danger">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('email')){echo 'has-error';} ?>">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" name="email" value="<?=set_value('email'); ?>" placeholder="Email" maxlength="25">
                        <?=form_error('email','<span class="label label-danger">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('password1')){echo 'has-error';} ?>">
                    <label for="password1" class="col-sm-2 control-label">Пароль</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password1" name="password1" value="<?=set_value('password1'); ?>" placeholder="Пароль" maxlength="16">
                        <?=form_error('password1','<span class="label label-danger">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('password2')){echo 'has-error';} ?>">
                    <label for="inputPassword2" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword2" name="password2" value="<?=set_value('password2'); ?>" placeholder="Подтверждение пароля" maxlength="16">
                        <?=form_error('password2','<span class="label label-danger">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('phone')){echo 'has-error';} ?>">
                    <label for="inputPhone" class="col-sm-2 control-label">Телефон</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPhone" name="phone" value="<?=set_value('phone'); ?>" placeholder="Телефон">
                        <?=form_error('phone','<span class="label label-danger">', '</span>'); ?>
                    </div>
                </div>
                <div class="form-group <?php if(form_error('city')){echo 'has-error';} ?>">
                    <label for="selectCity" class="col-sm-2 control-label">Город</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="selectCity" name="city">
                            <option value="">Выберите город...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <?=form_error('city','<span class="label label-danger">', '</span>'); ?>
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group text-right">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn my_btn">Зарегистрировать</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
</div>