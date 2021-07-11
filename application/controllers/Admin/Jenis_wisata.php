<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_wisata extends CI_Controller
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
        if ($this->session->userdata('logged_in') !== TRUE) {
            echo $this->session->set_flashdata('msg', array('warning', 'Anda tidak memiliki akses!, silakan login'));
            redirect('login');
        }
        $this->load->model('jenis_wisata_model');
        $this->load->model('wisata_model');
    }

    public function index()
    {
        $data['jenis_wisata_all'] = $this->jenis_wisata_model->getAllTotalAndOrderByNama();
        $this->load->view("admin/layout/header");
        $this->load->view("admin/jenis_wisata/index", $data);
        $this->load->view("admin/layout/footer");
    }

    public function edit($id)
    {
        $data['jenis_wisata'] = $this->jenis_wisata_model->findById($id);
        $data['jenis_wisata_all'] = $this->jenis_wisata_model->getAllTotalAndOrderByNama();
        $this->load->view("admin/layout/header");
        $this->load->view("admin/jenis_wisata/index", $data);
        $this->load->view("admin/layout/footer");
    }

    public function save()
    {
        $nama   = $this->input->post('namaJenisWisata', TRUE);
        $data = [$nama];
        $res = $this->jenis_wisata_model->save($data);
        echo $this->session->set_flashdata('msg', array('success', 'Jenis Wisata Rekreasi berhasil ditambahkan!'));
        redirect('admin/jenis_wisata');
    }

    public function update($id)
    {
        $data = $this->jenis_wisata_model->findById($id);
        $data->nama   = $this->input->post('namaJenisWisata', TRUE);
        $res = $this->jenis_wisata_model->update($data);
        echo $this->session->set_flashdata('msg', array('success', 'Jenis Wisata Rekreasi berhasil diperbarui!'));
        redirect('admin/jenis_wisata');
    }

    public function delete($id)
    {
        $wisata = $this->wisata_model->getByJenisWisata($id);
        if (count($wisata->result()) > 0) {
            echo $this->session->set_flashdata('msg', array('error', 'Gagal hapus data, sedang digunakan di data wisata!'));
            redirect('admin/jenis_wisata');
        }
        $res = $this->jenis_wisata_model->delete($id);
        echo $this->session->set_flashdata('msg', array('success', 'Jenis Wisata Rekreasi berhasil dihapus!'));
        redirect('admin/jenis_wisata');
    }
}
