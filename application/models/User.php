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

    public function signup ($user) {
        $query = "INSERT INTO `user` (`name`, `first_name`, `password`, `email`) VALUES 
        ('%s', '%s', sha1('%s'), '%s')"; 
        $query = sprintf($query, $user['name'], $user['first_name'], $user['password'], $user['email']);
        $this->db->query($query);
        return $this->login($user['email'], $user['password']);
    }

}