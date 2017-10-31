<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
<!--        css-->
        <link rel="stylesheet" href="<?= asset_url(); ?>css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?= asset_url(); ?>css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?= asset_url(); ?>css/custom.css"/>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<!--        javascript-->
        <script type="text/javascript" src="<?= asset_url(); ?>js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?= asset_url(); ?>js/bootstrap.min.js"></script>
    </head>
    <body>
<!--    menu top-->
    <div class="container-fluid top_menu">
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <a class="navbar-brand brand_img" href="#">
                    <span class="brand_font">Barahlo</span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 col-xs-8">
                <div class="input-group">
                    <input type="text" class="form-control my_input">
                    <span class="input-group-btn">
                        <button class="btn my_btn" type="button">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 text-right">
                <button class="btn my_btn" data-toggle="modal" data-target="#enterModal">вход</button>
            </div>
        </div>
    </div>
<!--    modal window-->
<!-- Modal -->
    <div id="enterModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
<!--                <div class="modal-header">-->
<!--                    <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--                    <h4 class="modal-title">Modal Header</h4>-->
<!--                </div>-->
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
<!--                    nav tabs-->
                    <div role="tabpanel">
                        <ul class="nav nav-tabs nav-justified">
                            <li role="presentation" class="active">
                                <a  href="#loginTab" aria-controls="loginTab" role="tab" data-toggle="tab">Вход</a>
                            </li>
                            <li role="presentation">
                                <a href="#registerTab" aria-controls="registerTab" role="tab" data-toggle="tab">Регистрация</a>
                            </li>
                        </ul>
<!--                        tab content-->
                        <div class="tab-content">
                        <!--login tab-->
                            <div role="tabpanel" class="tab-pane active" id="loginTab">

                            </div>
                            <div role="tabpanel" class="tab-pane" id="registerTab">register</div>
                        </div>
                    </div>
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


