<div class="container">
    <div class="row my_row_bg">
        <div class="col-lg-8">
            <div id="myCarousel" class="carousel slide my_carousel" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php if(isset($image)){ ?>
                        <?php for($i = 0; $i < count($image); $i++) {?>
                            <li data-target="#myCarousel" data-slide-to="<?=$i?>" <?php if($i == 0){ echo "class='active'";}?>></li>
                        <?php }?>
                    <?php }?>
                </ol>

                <!-- Wrapper for slides -->
                <?php if(isset($image)){ ?>
                    <div class="carousel-inner">
                        <?php for($i = 0; $i < count($image);$i++){?>
                            <div class="item <?php if($i == 0){ echo 'active'; } ?>">
                                <img src="<?=img_url().$image[$i]->large?>">
                            </div>
                        <?php }?>
                    </div>
                <?php }?>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="panel panel-default my_advert_panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4><?=$advert->title?></h4>
                            <span>Дата размещения: <?=$advert->place_date?></span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <p><?=$advert->description?></p>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="">Комментарии</label>
                </div>
                <div class="col-lg-12">
                    <div class="list-group">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span>Имя</span>
                                <small class="text-muted">12.08.17</small>
                                <br><br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque error natus nisi officiis sapiente totam voluptates! A aperiam ducimus est eum hic nisi non quaerat, quam quod voluptatum. Explicabo, repellendus.</p>
                            </li>
                            <li class="list-group-item">
                                <span>Имя</span>
                                <small class="text-muted">12.08.17</small>
                                <br><br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque error natus nisi officiis sapiente totam voluptates! A aperiam ducimus est eum hic nisi non quaerat, quam quod voluptatum. Explicabo, repellendus.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="" name="commentForm">
                        <div class="form-group my_comment_form">
                            <label for="cmt">Комментарий:</label>
                            <textarea class="form-control" rows="5" id="cmt" name="comment"></textarea>
                        </div>
                        <button id="commentSubmit" type="submit" class="btn my_rev_btn">Добавить комментарий</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default my_advert_panel">
                <div class="panel-body text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="my_price"><?=$advert->price?> р.</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h4><?=$advert->title?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if(isset($advert->phone)){ ?>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span><?=$advert->phone?></span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn my_rev_btn" data-toggle="modal" data-target="#messageModal">
                                <i class="fa fa-comments-o" aria-hidden="true"></i>
                                Написать сообщение
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default my_advert_panel">
                <div class="panel-body text-left">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4><?=$advert->name?></h4>
                            <small>Зарегестрирован: <?=$advert->reg_date?></small>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="text-muted">Город: </span>
                            <span><?=$advert->city?></span>
                        </div>
                    </div>
                    <br>
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <a href="">Другие объявления автора</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--modal message window-->
<div id="messageModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Сообщение</h4>
            </div>
            <div class="modal-body">
                <!--                    message form-->
                <form name="messageForm" action="">
                    <div class="form-group ">
                        <label for="msg">Текст сообщения:</label>
                        <textarea class="form-control" rows="5" id="msg" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn my_rev_btn">Отправить сообщение</button>
                </form>
            </div>
        </div>
    </div>
</div>