<?php 

class LoginController extends CI_Controller {
    public function login () {
        $this->load->model("user");

        $email = $this->input->post("email");
        $password = $this->input->post("password");

        $user = $this->user->login ($email, $password);

        $data = array();
        $data['page'] = "home";

        if ($user ) {
            $this->session->set_userdata("user", $user);
        } else {
            $data['error'] = "An error has occured";
            $data['page'] = "login";
            $this->load->view("template", $data);
        }
    }

    public function signup () {
        $this->load->model("user");

        $user = array();

        $user['name'] = $this->input->post("name");
        $user['first_name'] = $this->input->post("first_name");
        $user['password'] = $this->input->post("password");
        $user['confirm_password'] = $this->input->post("confirm_password");
        $user['email'] = $this->input->post("email");

        $result = $this->user->signup($user);
        $data = array();
        $data["page"] = "home";

        if ($result) {
            $this->session->set_userdata("user", $result);
        } else {
            $data['error'] = "An error has occured";
            $data["page"] = "signup";
        }
        $this->load->view("template", $data);
    }

    public function logout () {
        $this->session->sess_destroy();
        $this->login_form();
    }

    public function login_form () {
        $data = array();
        $data["page"] = "login";
        $this->load->view("template", $data);
    }

    public function signup_form () {
        $data = array();
        $data["page"] = "signup";
        $this->load->view("template", $data);
    }
}