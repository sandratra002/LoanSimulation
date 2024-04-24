<?php 

class Home extends CI_Controller {
    public function index() {

        $data = array();

        $data['page'] = "signup";

        $this->load->view("template", $data);
    }
}