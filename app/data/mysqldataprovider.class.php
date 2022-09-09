<?php

class MySqlDataProvider extends DataProvider {
    public function get_terms() {
        $db = $this->connect();

        if($db == null) {
            return [];
        }

        $query = $db->query('SELECT * FROM qrcodes');

        $data = $query->fetchAll(PDO::FETCH_CLASS, 'QrCode');
    
        $query = null;
        $db = null;

        return $data;
    }

    public function get_term($term) {
        $db = $this->connect();

        if($db == null) {
            return;
        } 

        $sql = 'SELECT * FROM qrcodes WHERE id = :id';
        $smt = $db->prepare($sql);

        $smt->execute([
            ':id' => $term
        ]);

        $data = $smt->fetchAll(PDO::FETCH_CLASS, 'QrCode');

        if(empty($data)) {
            return;
        }

        $smt = null;
        $db = null;

        return $data[0];
    }

    
    public function add_term($title, $android_link, $ios_link) {
        $db = $this->connect();

        if($db == null) {
            return;
        } 

        $sql = 'INSERT INTO qrcodes (title, android_link, ios_link) VALUES (:title, :android_link, :ios_link)';
        $smt = $db->prepare($sql);

        $smt->execute([
            ':title' => $title,
            ':android_link' => $android_link,
            ':ios_link' => $ios_link
        ]);

        $data = $smt->fetchAll(PDO::FETCH_CLASS, 'QrCode');

        $smt = null;
        $db = null;

        return $data;
    }

    private function connect() {
        try {
            return new PDO($this->source, CONFIG['db_user'], CONFIG['db_password']);
        } catch(PDOException $e) {
            return null;
        }
    }
}

?>