<?php

require_once('dataprovider.class.php');

class Data {
    static private $ds;

    static public function initialize(DataProvider $data_provider) {
        return self::$ds = $data_provider;
    }

    static public function get_terms() {
        return self::$ds->get_terms();
    }

    static public function get_term($term) {
        return self::$ds->get_term($term);
    }

    static public function add_term($title, $android_link, $ios_link) {
        return self::$ds->add_term($title, $android_link, $ios_link);
    }
}

?>