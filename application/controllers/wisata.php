<?php
class Wisata extends CI_Controller
{

	public function rekreasi()
	{
		$this->load->model('wisata_model');
		$data['wisata'] = 'Wisata Rekreasi';
		$data['getOne'] = $this->wisata_model->randRekreasi(1)->row();
		$data['data'] = $this->wisata_model->getAllRekreasiNotInId($data['getOne']->id);

		$this->load->view("layout/header");
		$this->load->view("wisata", $data);
		$this->load->view("layout/footer");
	}
	public function kuliner()
	{
		$this->load->model('wisata_model');
		$data['wisata'] = 'Wisata Kuliner';
		$data['getOne'] = $this->wisata_model->randKuliner(1)->row();
		$data['data'] = $this->wisata_model->getAllKulinerNotInId($data['getOne']->id);

		$this->load->view("layout/header");
		$this->load->view("wisata", $data);
		$this->load->view("layout/footer");
	}
	public function detail($id)
	{
		$this->load->model('wisata_model');
		$this->load->model('testimoni_model');
		$data['rekreasi'] = $this->wisata_model->findById($id);

		$data['testimoni'] = $this->testimoni_model->findByWisataId($id);

		$this->load->view("layout/header");
		$this->load->view("wisata_detail", $data);
		$this->load->view("layout/footer");
	}
}
