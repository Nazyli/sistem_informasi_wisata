<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
			redirect('login');
		}
	}

	public function index()
	{
		if ($this->session->userdata('role') === 'admin') {
			$this->load->view("admin/layout/header");
			$this->load->view("admin/dashboard");
			$this->load->view("admin/layout/footer");
		} else {
			$data['err'] = array('403', '403 Forbidden');
			$this->load->view("errors/error_app", $data);
		}
	}

	function member(){
		//Allowing akses to member only
		if($this->session->userdata('role')==='member'){
			$this->load->view("admin/layout/header");
			$this->load->view("admin/member");
			$this->load->view("admin/layout/footer");
		}else{
			$data['err'] = array('403', '403 Forbidden');
			$this->load->view("errors/error_app", $data);
		}
	  }
}
