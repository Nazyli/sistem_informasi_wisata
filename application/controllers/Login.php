<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function auth()
	{
		$email    = $this->input->post('email', TRUE);
		$password = md5($this->input->post('password', TRUE));
		$validate = $this->user_model->validate($email, $password);
		if ($validate->num_rows() > 0) {
			$data  = $validate->row_array();
			$name  = $data['username'];
			$email = $data['email'];
			$role = $data['role'];
			$sesdata = array(
				'username'  => $name,
				'email'     => $email,
				'role'     => $role,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			// access login for admin
			if ($role === 'admin') {
				redirect('admin');
				// access login for member
			} else {
				redirect('admin/member');
			}
		} else {
			echo $this->session->set_flashdata('msg',array('error','Username / Password Salahh'));
			redirect('login');

		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
