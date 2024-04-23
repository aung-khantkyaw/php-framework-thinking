<?php
session_start();
include_once 'Router.php';
include_once 'Func.php';
include_once 'config.php';
include_once 'app/models/UserModel.php';
include_once 'app/models/DBModel.php';
include_once 'app/views/partials/head.php';


if (!strpos($_SERVER['REQUEST_URI'], 'dashboard')) {
    include_once 'app/views/partials/nav.php';
    include_once 'app/views/partials/header.php';
}

// if (!urlIs('/dashboard')) {
//     include_once 'app/views/partials/nav.php';
//     include_once 'app/views/partials/header.php';
// }