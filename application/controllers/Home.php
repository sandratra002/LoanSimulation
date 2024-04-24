<?php 

class Home extends CI_Controller {
    public function index() {

        $data = array();

        $data['page'] = "login";

        $this->load->view("template", $data);
    }
}