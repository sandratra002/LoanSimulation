<?php 

class Home extends CI_Controller {
    public function index() {

        $user = $this->session->userdata('user');

        $data = array();
        $data['page'] = "home";

        if (!$user) {
            $data['page'] = "login";
            $data['error'] = "You must login first";
        } else {
            // $data['']
        }

        $this->load->view("template", $data);
    }
}