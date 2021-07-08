<?php
class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('profesi_model');
		$this->load->model('wisata_model');
	}
	public function index()
	{
		$data['randRekreasi'] = $this->wisata_model->randRekreasi(3);
		$data['randKuliner'] = $this->wisata_model->randKuliner(4);

		$this->load->view("layout/header");
		$this->load->view("layout/carousel");
		$this->load->view("dashboard", $data);
		$this->load->view("layout/footer");
	}
}
