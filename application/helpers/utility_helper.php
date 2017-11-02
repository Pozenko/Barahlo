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