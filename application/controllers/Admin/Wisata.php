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
		$this->load->model('jenis_kuliner_model');
		$this->load->model('jenis_wisata_model');
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
		if ($id != 'Kuliner' and $id != 'Rekreasi') {
			echo $this->session->set_flashdata('msg', array('warning', 'Type tidak terdaftar!'));
			redirect('admin');
		}
		$data['judul'] = $id;
		$data['rekreasi'] = $this->jenis_wisata_model->getAll();
		$data['kuliner'] = $this->jenis_kuliner_model->getAll();

		$this->load->view("admin/layout/header");
		$this->load->view("admin/wisata/create", $data);
		$this->load->view("admin/layout/footer");
	}
	public function save()
	{
		$nama    = $this->input->post('namaWisata', TRUE);
		$deskripsi    = $this->input->post('deskripsi', TRUE);
		$jenis_wisata_id   = $this->input->post('jenisWisata', TRUE);
		$fasilitas = $this->input->post('fasilitas', TRUE);
		$bintang = NULL;
		$kontak = $this->input->post('noTelp', TRUE);
		$alamat = $this->input->post('alamat', TRUE);
		$latlong = $this->input->post('LatLot', TRUE);
		$email = $this->input->post('email', TRUE);
		$web = $this->input->post('alamatWeb', TRUE);
		$jenis_kuliner_id    = $this->input->post('jenisKuliner', TRUE);
		$data = [$nama, $deskripsi, $jenis_wisata_id, $fasilitas, $bintang, $kontak, $alamat, $latlong, $email, $web, $jenis_kuliner_id];
		$res = $this->wisata_model->save($data);
		if ($jenis_wisata_id != NULL) {
			echo $this->session->set_flashdata('msg', array('success', 'Wisata Rekreasi berhasil ditambahkan!'));
			redirect('admin/wisata/rekreasi');
		} else {
			echo $this->session->set_flashdata('msg', array('success', 'Wisata Kuliner berhasil ditambahkan!'));
			redirect('admin/wisata/kuliner');
		}
	}

	public function edit($id)
	{
		$data['wisata'] = $this->wisata_model->findById($id);
		$judul = "";
		if($data['wisata']->jenis_wisata_id != NULL){
			$judul = "Rekreasi";
		}else{
			$judul = "Kuliner";
		}
		$data['judul'] = $id;
		$data['rekreasi'] = $this->jenis_wisata_model->getAll();
		$data['kuliner'] = $this->jenis_kuliner_model->getAll();

		$this->load->view("admin/layout/header");
		$this->load->view("admin/wisata/edit", $data);
		$this->load->view("admin/layout/footer");
	}
}