<?php
class User {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAllUsers() {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addUser($data) {
        $stmt = $this->db->query("INSERT INTO users (name) VALUES ('" . $data['name'] . "')");
    }
}
