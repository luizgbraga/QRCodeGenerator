<?php

function view($name, $model = '') {
    global $view_bag;
    require(APP_PATH . "views/layout.view.php");
}

function redirect($url) {
    header("Location: $url");
    die();
}

function is_post() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function is_get() {
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}


function sanitize($value) {
    $temp = filter_var(trim($value), FILTER_SANITIZE_STRING);

    if($temp === false) {
        return '';
    }  

    return $temp;
}

function detect_os() {
    $iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
    $iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
    $Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");

    return [$iPhone, $iPad, $Android];
}

?>