<div class="container">
    <div class="row my_row_bg">
        <div class="my_home_container">
            <div class="row text-left">
                <div class="col-lg-12 my_filter_group">
                    <button class="btn my_rev_btn" type="button" id="filter_btn">
                        <i class="fa fa-sliders" aria-hidden="true"></i>
                        Фильтры
                        <i class="fa fa-angle-down" id="btn_caret" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
<!--            categories form-->
            <form name="categories" method="post" action="<?=base_url()?>home" id="filter_form" hidden>
                <div class="row my_cat_row">
                    <div class="form-group col-lg-4 col-md-4">
                        <label for="selectCategories">Катерогии</label>
                        <select class="form-control input-sm" id="selectCategories" name="filter[id_cat]" >
                            <option value="">Выберите категорию...</option>
                            <?php foreach ($categories as $category){?>
                                <option value="<?=$category['id_cat']?>"><?=$category['name']?></option>
                            <?}?>
                        </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-4">
                        <label for="selectSubCategories">Подкатегории</label>
                        <select class="form-control input-sm" id="selectSubCategories" name="filter[id_subcat]" >
                            <option value="">Выберите подкатегорию...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2 col-md-2">
                        <label for="selectSellingOption">Тип сделки</label>
                        <select class="form-control input-sm" id="selectSellingOption" name="filter[selling_options]" >
                            <option value="">Тип...</option>
                            <option value="1">Покупка</option>
                            <option value="2">Продажа</option>
                            <option value="3">Обмен</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2 col-md-2">
                        <label for="selectCity">Город</label>
                        <select class="form-control input-sm" id="selectCity" name="filter[city]" >
                            <option value="">Выберите город...</option>
                            <?php foreach ($cities as $city){?>
                                <option value="<?=$city['id_cities']?>"><?=$city['city']?></option>
                            <?}?>
                        </select>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="form-group col-lg-2">
                        <button type="submit" class="btn btn-default">Показать объявления</button>
                    </div>
                    <div class="form-group col-lg-2">
                        <a href="#" class="btn btn-default">Сбросить</a>
                    </div>
                </div>
            </form>
<!--            adverts list-->
            <div class="row">
                <?php if(isset($results)){ ?>
                <ul class="list-unstyled col-lg-12">
                    <?php foreach ($results as $data){ ?>
                    <li>
                        <div class="row">
                            <div class="panel panel-default my_panel">
                                <div class="panel-body my_panel_body">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4" style="max-width: 260px">
                                            <div class="my_img_container">
                                                <a href="<?=base_url()?>ad?id=<?=$data->id_advert?>" >
                                                    <img src="<?=small_img_url();?><?php if($data->small){echo $data->small;} ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-5">
                                            <a href="<?=base_url()?>ad?id=<?=$data->id_advert?>" class="my_advert_title">
                                                <h4><?=$data->title?></h4>
                                            </a>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-right">
                                            <h4 class="my_price"><?=$data->price?> р.</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                            <small><?=$data->place_date?></small>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
                                            <small class="text-muted">Категория:</small>
                                            <small><?=$data->name?></small>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                            <small class="text-muted">Тип сделки:</small>
                                            <small><?=$data->selling_options?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                        <br>
                    <?php }?>
                </ul>
                <?php } else{?>
                    <div>Объявлений пока нет(</div>
                <?php }?>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                    <!--pagination-->
                    <?php if (isset($links)) { ?>
                        <?php echo $links ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>