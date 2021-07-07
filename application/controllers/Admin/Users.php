<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
		$this->load->model('user_model');
		$this->load->model('profesi_model');
		$this->load->model('testimoni_model');
	}

	public function index()
	{
		$data['users'] = $this->user_model->getAll();
		$data['profesi']  = $this->profesi_model->getAll();


		$this->load->view("admin/layout/header");
		$this->load->view("admin/users/index", $data);
		$this->load->view("admin/layout/footer");
	}

	public function edit($id)
	{
		$data['users'] = $this->user_model->getAll();
		$data['profesi']  = $this->profesi_model->getAll();

		$data['userId'] = $this->user_model->findById($id);
		$this->load->view("admin/layout/header");
		$this->load->view("admin/users/index", $data);
		$this->load->view("admin/layout/footer");
	}

	public function save()
	{
		$nama    = $this->input->post('nama', TRUE);
		$username    = $this->input->post('username', TRUE);
		$email    = $this->input->post('email', TRUE);
		$password = md5($this->input->post('password', TRUE));
		$role = $this->input->post('role', TRUE);
		$profesi_id = $this->input->post('profesi', TRUE);
		$data = [$nama, $username, $email, $password, $role, $profesi_id];
		$res = $this->user_model->save($data);
		echo $this->session->set_flashdata('msg', array('success', 'User berhasil ditambahkan!'));
		redirect('admin/users');
	}

	public function update($id)
	{
		$data = $this->user_model->findById($id);
		$data->nama    = $this->input->post('nama', TRUE);
		$data->username    = $this->input->post('username', TRUE);
		$data->email    = $this->input->post('email', TRUE);
		if ($this->input->post('password', TRUE) !== NULL) {
			$password = md5($this->input->post('password', TRUE));
		}
		$data->role = $this->input->post('role', TRUE);
		$data->profesi_id = $this->input->post('profesi', TRUE);
		$res = $this->user_model->update($data);
		echo $this->session->set_flashdata('msg', array('success', 'User berhasil diperbarui!'));
		redirect('admin/users');
	}

	public function delete($id)
	{
		$wisata = $this->testimoni_model->findByUserID($id);
		if (count($wisata->result()) > 0) {
			echo $this->session->set_flashdata('msg', array('error', 'Gagal hapus data, sedang digunakan di data testimoni!'));
			redirect('admin/users');
		}
		$res = $this->user_model->delete($id);
		echo $this->session->set_flashdata('msg', array('success', 'User berhasil dihapus!'));
		redirect('admin/users');
	}
}
