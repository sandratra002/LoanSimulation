<?php 

class SimulationController extends CI_Controller {

    public function simulation ($table) {
        $data = array();
        $data["page"] = "simulation";
        $data["table"] = $table;
        $this->load->view("template", $data);
    }

    public function simulation_list () {

    }
    public function simulate () {
        $data = array();

        $data['amount'] = $this->input->post("amount");
        $data['rate'] = $this->input->post("rate") / 100;
        $data['start_date'] = $this->input->post("start_date");
        $data['start_return'] = $this->input->post("start_return");
        $data['duration'] = $this->input->post("duration");
        $this->load->model('simulation');
        // var_dump($data);
        $simulation = $this->simulation->calculAmortissement($data['amount'], $data['rate'], $data['duration'], $data['start_date']);
        $this->simulation($simulation);
    }
    public function simulation_form() {
        $data = array();
        $data["page"] = "simulation_form";
        $this->load->view("template", $data);
    }
}