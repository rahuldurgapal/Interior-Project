<?php
class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllUsers() {
        $query = "SELECT * FROM user";
        $result = $this->db->query($query);

        $users = array();

        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }

        return $users;
    }
}
?>
