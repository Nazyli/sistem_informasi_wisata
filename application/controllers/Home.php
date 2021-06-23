<?php
class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('wisata_model');
		$data['randFive'] = $this->wisata_model->randFive();
		$data['randFour'] = $this->wisata_model->randFour();

		$this->load->view("home", $data);
	}
}
