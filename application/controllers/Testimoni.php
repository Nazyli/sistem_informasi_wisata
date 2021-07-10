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
		$this->load->model('user_model');
		$this->load->model('profesi_model');
		$this->load->model('testimoni_model');
		$this->load->model('wisata_model');
        if ($this->session->userdata('logged_in') !== TRUE) {
			echo $this->session->set_flashdata('msg', array('warning', 'Anda tidak memiliki akses!, silakan login'));
			redirect('login');
		}
	}

	public function index()
	{
		$id = $this->session->userdata('id');
		$data['user'] = $this->user_model->findById($id);
		$data['profesi'] = $this->profesi_model->findById($data['user']->profesi_id);
		$data['wisata'] = $this->wisata_model->getByUserId($id);

		$this->load->view("layout/header");
		$this->load->view("testimoni/index", $data);
		$this->load->view("layout/footer");
		
	}
	public function saveByWisata($id)
	{
		$wisata = $this->wisata_model->findById($id);
		$idUser = $this->session->userdata('id');
		$user = $this->user_model->findById($idUser);


		// Save Testimoni
		$nama = $user->nama;
		$email = $user->email;
		$wisata_id = $id;
		$profesi_id = $user->profesi_id;
		$komentar    = $this->input->post('komentar', TRUE);
		$rating    = $this->input->post('rating', TRUE);
		$user_id = $user->id;
		$foto = $user->foto;

		$data = [$nama, $email, $wisata_id, $profesi_id, $rating, $komentar, $user_id, $foto];
		$this->testimoni_model->save($data);

		// update star
		$wisata->bintang = $this->testimoni_model->countStar($wisata->id);
		$this->wisata_model->update($wisata);

		echo $this->session->set_flashdata('msg', array('success', 'Testimoni berhasil ditambahkan!'));
		redirect('wisata/detail/'.$id);
	}
	public function edit($id)
	{
		$idUser = $this->session->userdata('id');
		$data['user'] = $this->user_model->findById($idUser);
		$data['profesi'] = $this->profesi_model->findById($data['user']->profesi_id);
		$data['wisata'] = $this->wisata_model->findByTestimoniId($id);

		$this->load->view("layout/header");
		$this->load->view("testimoni/edit", $data);
		$this->load->view("layout/footer");
		
	}
	public function update($id)
	{
		$data = $this->testimoni_model->findById($id);
		$data->komentar    = $this->input->post('komentar', TRUE);
		$data->rating    = $this->input->post('rating', TRUE);

		$this->testimoni_model->update($data);

		// update star
		$wisata = $this->wisata_model->findById($data->wisata_id);
		$wisata->bintang = $this->testimoni_model->countStar($data->wisata_id);
		$this->wisata_model->update($wisata);

		echo $this->session->set_flashdata('msg', array('success', 'Testimoni berhasil diperbarui!'));
		redirect('testimoni');
	}

	public function delete($id)
	{
		$data = $this->testimoni_model->findById($id);
		$res = $this->testimoni_model->delete($id);

		// update star
		$wisata = $this->wisata_model->findById($data->wisata_id);
		$wisata->bintang = $this->testimoni_model->countStar($data->wisata_id);
		$this->wisata_model->update($wisata);

		echo $this->session->set_flashdata('msg', array('success', 'Testimoni berhasil dihapus!'));
		redirect('testimoni');
	}
}
