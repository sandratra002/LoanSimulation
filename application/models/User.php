<?php 

class User extends CI_Model {
    public function login (string $email, string $password) {
        $query = "SELECT * FROM `user` WHERE `email` = '%s' AND `password` = sha1('%s') ";
        $query = sprintf($query, $email, $password);

        $result = $this->db->query($query);

        if ($user = $result->row_array()) {
            return $user;
        } else {
            return null;
        }
    }

}