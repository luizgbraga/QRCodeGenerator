<?php

require_once("app/app.php");

if(!isset($_GET['qr'])) {
    redirect('index.php');
}

$data = Data::get_term($_GET['qr']); // todo: validate!

if($data == false) {
    view('not_found');
    die();
} 

$view_bag = [
    'title' => "QR Code for $data->title"
];

view('details', $data);

?>