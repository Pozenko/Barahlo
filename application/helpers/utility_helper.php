<?php
function asset_url()
{
    return base_url(). 'assets/';
}

function css_url()
{
    return asset_url(). 'css/';
}

function js_url()
{
    return asset_url(). 'js/';
}

function imgs_url()
{
    return asset_url(). 'imgs/';
}

function img_url()
{
    return base_url(). 'uploads/images/';
}
function small_img_url()
{
    return img_url(). 'small/';
}