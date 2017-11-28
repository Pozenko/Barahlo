<div class="container">
    <div class="row my_row_bg">
        <div class="my_home_container">
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
                    <h4 class="text-center">Объявлений пока нет(</h4>
                <?php }?>
            </div>
<!--            <div class="row text-center">-->
<!--                <div class="col-lg-12">-->
<!--                    <!--pagination-->-->
<!--                    --><?php //if (isset($links)) { ?>
<!--                        --><?php //echo $links ?>
<!--                    --><?php //} ?>
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>