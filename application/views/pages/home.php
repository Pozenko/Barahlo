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
                        <table class="table my_table">
                            <tbody>
                            <tr>
<!--                               advert image-->
                                <td rowspan="3" class="col-lg-1 col-md-1 col-sm-1 col-xs-1 my_td_img">
                                    <div class="my_img_container">
                                        <a href="" >
                                            <img src="<?=imgs_url();?>testIMG.jpeg" alt="">
                                        </a>
                                    </div>
                                </td>
<!--                               advert header-->
                                <td class="col-lg-10 col-md-9 col-sm-9 col-xs-8 my_td_header">
                                    <a href="">Тайтле товара ыфа ыфа вавыавыа в</a>
                                </td>
<!--                               advert price-->
                                <td class="col-lg-1 col-md-2 col-sm-2 col-xs-3">
                                    <span class="my_price">23 р.</span>
                                </td>
                            </tr>
                            <tr>
<!--                               advert footer-->
                                <td colspan="3" class="col-lg-10 col-md-9 col-sm-9 col-xs-8 my_td_footer">
                                    <small>12.30.2017 12:30</small>
                                    <span class="my_footer_cat">
                                        <span class="text-muted my_footer_title">Категория:</span>
                                        <span>Название категории</span>
                                    </span>
                                    <span class="text-muted my_footer_title">Тип:</span>
                                    <span>Продажа</span>
                                    <span class="my_footer_city">
                                        <span class="text-muted my_footer_title">Город:</span>
                                        <span>Минск</span>
                                    </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>