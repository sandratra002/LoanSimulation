<?php 

class LoginController extends CI_Controller {
    public function login () {
        $this->load->model("user");

        $email = $this->input->post("email");
        $password = $this->input->post("password");

        $user = $this->user->login ($email, $password);

        if ($user ) {
            echo "Logged in";
        } else {
            echo "Not logged";
        }
    }
}