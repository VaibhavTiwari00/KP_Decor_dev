<?php


include_once 'config.php';

define('PAGE', './pages/');
define("COMPONENT", "../global");

define('HEAD', COMPONENT . '/head.php');
define('HEADER', COMPONENT . '/header.php');
define('FOOTER', COMPONENT . '/footer.php');
define('SCRIPT', COMPONENT . '/script.php');


function get_assets()
{
    return ROOT . '/assets';
}


function get_img()
{
    return ROOT . '/assets/images/';
}

function get_css()
{
    return ROOT . '/assets/css/';
}

function home_path()
{
    return DOMAIN;
}


function get_global_css()
{
    return ROOT . '/global/css/';
}

function get_global_js()
{
    return ROOT . '/global/js/';
}
