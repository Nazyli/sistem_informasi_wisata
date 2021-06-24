<?php
class Home extends CI_Controller
{

	public function index()
	{
		$this->load->model('wisata_model');
		$data['randRekreasi'] = $this->wisata_model->randRekreasi(3);
		$data['randKuliner'] = $this->wisata_model->randKuliner(4);

		$this->load->view("header");
		$this->load->view("carousel");
		$this->load->view("home", $data);
		$this->load->view("footer");
	}
}
