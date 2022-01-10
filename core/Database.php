<?php

class Database {

    static function getPDO() {        
        return new PDO("mysql:host=localhost;port=3306;dbname=store", "root", "");
    }
}
?>