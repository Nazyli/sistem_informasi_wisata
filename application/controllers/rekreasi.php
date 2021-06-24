<?php
class Rekreasi extends CI_Controller
{

	public function index()
	{
		$this->load->model('wisata_model');
		$data['getOne'] = $this->wisata_model->randRekreasi(1)->row();
		$data['rekreasi'] = $this->wisata_model->getAllRekreasiNotInId($data['getOne']->id);

		$this->load->view("header");
		$this->load->view("rekreasi", $data);
		$this->load->view("footer");
	}
}
