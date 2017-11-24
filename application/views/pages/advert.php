<div class="container">
    <div class="row my_row_bg">
        <div class="col-lg-8">
            <div id="myCarousel" class="carousel slide my_carousel" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?=imgs_url()?>testIMG.jpeg">
                    </div>

                    <div class="item">
                        <img src="<?=imgs_url()?>testIMG.jpeg">
                    </div>

                    <div class="item">
                        <img src="<?=imgs_url()?>testIMG.jpeg">
                    </div>
                </div>

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
                            <span>Дата размещения 12.02.2017</span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequatur deserunt dignissimos, molestias nobis quae vel velit! Dolor est excepturi sed suscipit. Ad aspernatur culpa ex laboriosam numquam, quas ut.</p>
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
                            <h4 class="my_price">2300 р.</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Title</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>+375 29 545 8080</span>
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
                            <h4>Имя</h4>
                            <small>Зарегестрирован: 12.17</small>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="text-muted">Город: </span>
                            <span>Минск</span>
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