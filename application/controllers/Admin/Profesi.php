<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profesi extends CI_Controller
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
        $this->load->model('profesi_model');
        $this->load->model('testimoni_model');
    }

    public function index()
    {
        $data['profesi_all'] = $this->profesi_model->getAllTotalAndOrderByNama();
        $this->load->view("admin/layout/header");
        $this->load->view("admin/profesi/index", $data);
        $this->load->view("admin/layout/footer");
    }

    public function edit($id)
    {
        $data['profesi'] = $this->profesi_model->findById($id);
        $data['profesi_all'] = $this->profesi_model->getAllTotalAndOrderByNama();
        $this->load->view("admin/layout/header");
        $this->load->view("admin/profesi/index", $data);
        $this->load->view("admin/layout/footer");
    }

    public function save()
    {
        $nama   = $this->input->post('namaJenisWisata', TRUE);
        $data = [$nama];
        $res = $this->profesi_model->save($data);
        echo $this->session->set_flashdata('msg', array('success', 'Profesi berhasil ditambahkan!'));
        redirect('admin/profesi');
    }

    public function update($id)
    {
        $data = $this->profesi_model->findById($id);
        $data->nama   = $this->input->post('namaJenisWisata', TRUE);
        $res = $this->profesi_model->update($data);
        echo $this->session->set_flashdata('msg', array('success', 'Profesi berhasil diperbarui!'));
        redirect('admin/profesi');
    }

    public function delete($id)
    {
        $wisata = $this->testimoni_model->findByProfesiID($id);
        if (count($wisata->result()) > 0) {
            echo $this->session->set_flashdata('msg', array('error', 'Gagal hapus data, sedang digunakan di data user testimoni!'));
            redirect('admin/profesi');
        }
        $res = $this->profesi_model->delete($id);
        echo $this->session->set_flashdata('msg', array('success', 'Profesi berhasil dihapus!'));
        redirect('admin/profesi');
    }
}
