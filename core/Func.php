<?php
function view($viewName)
{
    return require_once "app/views/{$viewName}.php";
}

function dashboardView($viewName)
{
    return require_once "app/views/dashboard/{$viewName}.php";
}

function urlIs($url)
{
    return $_SERVER['REQUEST_URI'] == $url;
}


function has($var)
{
    return !empty($var);
}

function encodePass($pass)
{
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass, 'st');
    return $pass;
}
