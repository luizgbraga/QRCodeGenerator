<?php

require_once("app/app.php");

if(is_post()) {
    $title = sanitize($_POST['new-title']);
    $android_link = sanitize($_POST['new-android-link']);
    $ios_link = sanitize($_POST['new-ios-link']);

    if(empty($title) || empty($android_link) || empty($ios_link)) {
        // todo: display message
    } else {
        Data::add_term($title, $android_link, $ios_link);
        redirect('index.php');
    }
}

$view_bag = [
    'title' => "Create New QR Code"
];

view('create', Data::get_terms());

?>