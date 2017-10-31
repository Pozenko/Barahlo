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
<!--    Menu top-->
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
<!--    Modal window-->
    <div id="enterModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content my_modal_style">
                <div class="modal-header my_modal_header">
                    <h4 class="modal-title">Вход</h4>
                </div>
                <div class="modal-body">
<!--                    login form-->
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon my_input_addon" id="basic-addon1">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </span>
                                <input type="text" class="form-control my_modal_input" placeholder="E-mail" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon my_input_addon" id="basic-addon1">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                </span>
                                <input type="password" class="form-control my_modal_input" placeholder="Пароль" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <a href="#">Забыли пароль?</a><br><br>
                        <button type="submit" class="btn my_modal_btn">Войти</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn my_modal_btn" data-dismiss="modal">Регистрация</button>
                </div>
            </div>

        </div>
    </div>


