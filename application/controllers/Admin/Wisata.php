<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisata extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			echo $this->session->set_flashdata('msg', array('warning', 'Anda tidak memiliki akses!, silakan login'));
			redirect('login');
		}
		$this->load->model('wisata_model');
		$this->load->model('testimoni_model');
	}
	
	public function rekreasi()
	{
		$data['judul'] = 'Rekreasi';
		$data['wisata'] = $this->wisata_model->getAllRekreasi();

		$this->load->view("admin/layout/header");
		$this->load->view("admin/wisata/index", $data);
		$this->load->view("admin/layout/footer");
	}
	public function kuliner()
	{
		$data['judul'] = 'Kuliner';
		$data['wisata'] = $this->wisata_model->getAllKuliner();

		$this->load->view("admin/layout/header");
		$this->load->view("admin/wisata/index", $data);
		$this->load->view("admin/layout/footer");
	}
	public function detail($id)
	{
		$data['wisata'] = $this->wisata_model->findById($id);

		$data['testimoni'] = $this->testimoni_model->findByWisataId($id);

		$this->load->view("admin/layout/header");
		$this->load->view("admin/wisata/detail", $data);
		$this->load->view("admin/layout/footer");
	}
	public function create($id)
	{
		$this->load->view("admin/layout/header");
		$this->load->view("admin/wisata/create", $id);
		$this->load->view("admin/layout/footer");
	}
}
