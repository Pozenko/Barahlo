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
            <form name="categories" action="" id="filter_form" hidden>
                <div class="row my_cat_row">
                    <div class="form-group col-lg-4 col-md-4">
                        <label for="selectCategories">Катерогии</label>
                        <select class="form-control input-sm" id="selectCategories">
                            <option value="">Выберите категорию...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-4">
                        <label for="selectSubCategories">Подкатегории</label>
                        <select class="form-control input-sm" id="selectSubCategories">
                            <option value="">Выберите подкатегорию...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2 col-md-2">
                        <label for="selectSellingOption">Тип сделки</label>
                        <select class="form-control input-sm" id="selectSellingOption">
                            <option value="">Тип...</option>
                            <option value="1">Покупка</option>
                            <option value="2">Продажа</option>
                            <option value="3">Обмен</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2 col-md-2">
                        <label for="selectCity">Город</label>
                        <select class="form-control input-sm" id="selectCity">
                            <option value="">Выберите город...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-default">Показать объявления</button>
                    </div>
                </div>
            </form>
<!--            adverts list-->
            <div class="row">
                <ul class="list-unstyled col-lg-12">
                    <li>
                        <div class="row">
                            <div class="panel panel-default my_panel">
                                <div class="panel-body my_panel_body">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4" style="max-width: 260px">
                                            <div class="my_img_container">
                                                <a href="" >
                                                    <img src="<?=imgs_url();?>testIMG.jpeg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-5">
                                            <a href="" class="my_advert_title">
                                                <h4>Title advertg fdgf  dhhdfghfddfgf dfdfhgfdhdfg dhdfh df df hdfh df dh d</h4>
                                            </a>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 text-right">
                                            <h4 class="my_price">2300 р.</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                            <small>12 сент 17</small>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
                                            <small class="text-muted">Категория:</small>
                                            <small>Название категории</small>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                            <small class="text-muted">Тип сделки:</small>
                                            <small>Продажа</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>