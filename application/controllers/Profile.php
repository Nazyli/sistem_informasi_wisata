<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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
	}

	public function index()
	{
		$id = $this->session->userdata('id');
		$data['user'] = $this->user_model->findById($id);
		$data['profesi'] = $this->profesi_model->findById($data['user']->profesi_id);


		$this->load->view("admin/layout/header");
		$this->load->view("admin/profile/index", $data);
		$this->load->view("admin/layout/footer");
	}
	public function me()
	{
		$id = $this->session->userdata('id');
		$data['user'] = $this->user_model->findById($id);
		$data['profesi'] = $this->profesi_model->findById($data['user']->profesi_id);


		$this->load->view("layout/header");
		$this->load->view("admin/profile/index", $data);
		$this->load->view("layout/footer");
	}
	public function edit()
	{
		$id = $this->session->userdata('id');
		$data['user'] = $this->user_model->findById($id);
		$data['profesi'] = $this->profesi_model->findById($data['user']->profesi_id);
		$data['profesi_all'] = $this->profesi_model->getAll();

		if ($data['user']->role == 'admin') {
			$this->load->view("admin/layout/header");
		} else {
			$this->load->view("layout/header");
		}
		$this->load->view("admin/profile/edit", $data);
		if ($data['user']->role == 'admin') {
			$this->load->view("admin/layout/footer");
		} else {
			$this->load->view("layout/footer");
		}
	}

	public function changePassword()
	{
		$id = $this->session->userdata('id');
		$data['user'] = $this->user_model->findById($id);
		$data['profesi'] = $this->profesi_model->findById($data['user']->profesi_id);
		$data['profesi_all'] = $this->profesi_model->getAll();
		if ($data['user']->role == 'admin') {
			$this->load->view("admin/layout/header");
		} else {
			$this->load->view("layout/header");
		}
		$this->load->view("admin/profile/change_password", $data);
		if ($data['user']->role == 'admin') {
			$this->load->view("admin/layout/footer");
		} else {
			$this->load->view("layout/footer");
		}
	}

	public function update($id)
	{
		$data = $this->user_model->findById($id);
		$data->nama    = $this->input->post('nama', TRUE);
		$data->username    = $this->input->post('username', TRUE);
		$data->email    = $this->input->post('email', TRUE);
		$data->profesi_id = $this->input->post('profesi', TRUE);
		$res = $this->user_model->update($data);
		echo $this->session->set_flashdata('msg', array('success', 'User berhasil diperbarui!'));
		if ($data->role == 'admin') {
			redirect('profile');
		} else {
			redirect('profile/me');
		}
	}

	public function updatePassword($id)
	{
		$data = $this->user_model->findById($id);
		$passLama = md5($this->input->post('passLama', TRUE));
		if ($data->password != $passLama) {
			echo $this->session->set_flashdata('msg', array('error', 'Password Lama yang dimasukkan salah!'));
			redirect('profile/changePassword');
		}
		$data->password = md5($this->input->post('password', TRUE));
		$res = $this->user_model->update($data);
		echo $this->session->set_flashdata('msg', array('success', 'Password berhasil diperbarui!'));
		if ($data->role == 'admin') {
			redirect('profile');
		} else {
			redirect('profile/me');
		}
	}
}
