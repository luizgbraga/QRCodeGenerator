<?php

require_once("app/app.php");

$os = detect_os();

if(!isset($_GET['qr'])) {
    redirect('index.php');
}

$data = Data::get_term($_GET['qr']); // todo: validate!

if($data == false) {
    view('not_found');
    die();
} 

if ($os[0] || $os[1]) {
    header("Location: $data->ios_link");
} else if($os[2]) {
    header("Location: $data->android_link");
} else {
    header("Location: $data->alternative_link");
}

?> 