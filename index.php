<?php

require_once("app/app.php");

$view_bag = [
    'title' => 'Home'
];

$items = Data::get_terms();

view('index', $items);

?>