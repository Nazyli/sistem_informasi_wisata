<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
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
		$this->load->model('jenis_kuliner_model');
		$this->load->model('jenis_wisata_model');
	}

	public function index()
	{
		$data['wisata'] = $this->wisata_model->getAll();

		$this->load->view("admin/layout/header");
		$this->load->view("admin/testimoni/index", $data);
		$this->load->view("admin/layout/footer");
	}

	public function detail($id)
	{
		$data['wisata'] = $this->wisata_model->findById($id);
		$data['testimoni'] = $this->testimoni_model->findByWisataIdOrderByCreated($id);

		$this->load->view("admin/layout/header");
		$this->load->view("admin/testimoni/detail", $data);
		$this->load->view("admin/layout/footer");
	}
}
