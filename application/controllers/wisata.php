<?php
class Wisata extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('profesi_model');
		$this->load->model('wisata_model');
		$this->load->model('testimoni_model');
		$this->load->model('gallery_wisata_model');
	}
	public function rekreasi()
	{
		$data['wisata'] = 'Wisata Rekreasi';
		$data['getOne'] = $this->wisata_model->randRekreasi(1)->row();
		$data['data'] = $this->wisata_model->getAllRekreasiNotInId($data['getOne']->id);

		$this->load->view("layout/header");
		$this->load->view("wisata", $data);
		$this->load->view("layout/footer");
	}
	public function kuliner()
	{
		$data['wisata'] = 'Wisata Kuliner';
		$data['getOne'] = $this->wisata_model->randKuliner(1)->row();
		$data['data'] = $this->wisata_model->getAllKulinerNotInId($data['getOne']->id);

		$this->load->view("layout/header");
		$this->load->view("wisata", $data);
		$this->load->view("layout/footer");
	}
	public function detail($id)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$userId = $this->session->userdata('id');
			$data['user'] = $this->user_model->findById($userId);
			$data['profesi'] = $this->profesi_model->findById($data['user']->profesi_id);
		}

		$data['rekreasi'] = $this->wisata_model->findById($id);

		$data['testimoni'] = $this->testimoni_model->findByWisataId($id);
		$data['gallery'] = $this->gallery_wisata_model->findByWisataId($id);


		$this->load->view("layout/header");
		$this->load->view("wisata_detail", $data);
		$this->load->view("layout/footer");
	}
}
