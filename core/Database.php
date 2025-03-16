<?php
class Database {
    private static $instance = null;

    public static function connect() {
        if (self::$instance == null) {
            self::$instance = new PDO('mysql:host=db;dbname=mvc_app', 'root', 'root');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
