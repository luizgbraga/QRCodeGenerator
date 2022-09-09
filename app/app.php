<?php

// put all requires here

define('APP_PATH', dirname(__FILE__) . "/../");

require_once("functions.php");
require_once("config.php");
require_once("data/data.class.php");
require_once("data/mysqldataprovider.class.php");

Data::initialize(new MySqlDataProvider(CONFIG['db']));

?>