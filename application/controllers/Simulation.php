<?php 

class Simulation extends CI_Controller {

    public function simulation_list () {

    }
    public function simulate () {

    }
    public function simulation_form() {
        $data = array();
        $data["page"] = "simulation_form";
        $this->load->view("template", $data);
    }
}