<?php 

class LoginController extends CI_Controller {
    public function login () {
        $this->load->model("user");

        $email = $this->input->post("email");
        $password = $this->input->post("password");

        $user = $this->user->login ($email, $password);

        if ($user ) {
            var_dump($user);
            echo "Logged in";
        } else {
            echo "Not logged";
        }
    }

    public function signup () {
        $this->load->model("user");

        $user = array();

        $user['name'] = $this->input->post("name");
        $user['first_name'] = $this->input->post("first_name");
        $user['password'] = $this->input->post("password");
        $user['email'] = $this->input->post("name");

        $result = $this->user->signup ($user);
        if ($result) {
            var_dump($result);
            echo "Signed up";
        } else {
            echo "Not signed up";
        }
    }
}