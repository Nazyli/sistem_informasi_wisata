<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_wisata extends CI_Controller
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
        $this->load->model('gallery_wisata_model');
        $this->load->model('wisata_model');
    }

    public function index($id)
    {
        $data['gallery_wisata'] = $this->gallery_wisata_model->findByWisataId($id);
        $data['wisata'] = $this->wisata_model->findById($id);
        $this->load->view("admin/layout/header");
        $this->load->view("admin/gallery_wisata/index", $data);
        $this->load->view("admin/layout/footer");
    }

    public function save($id)
    {
        // $data['gallery_wisata'] = $this->gallery_wisata_model->findByWisataId($id);
        // if (count($data['gallery_wisata']->result()) >= 6) {
        //     echo $this->session->set_flashdata('msg', array('error', 'Setiap wisata maksimal memiliki 6 foto gallery'));
        //     redirect('admin/gallery_wisata/index/' . $id);
        // }

        $config['upload_path']          = './assets/upload/wisata';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 1000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['encrypt_name']            = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_wisata')) {
            echo $this->session->set_flashdata('msg', array('error', $this->upload->display_errors()));
            redirect('admin/gallery_wisata/index/' . $id);
        } else {
            $foto_wisata = $this->upload->data("file_name");
        }

        $data = [$foto_wisata, $id];
        $this->gallery_wisata_model->save($data);

        echo $this->session->set_flashdata('msg', array('success', 'Foto wista berhasil ditambahkan'));
        redirect('admin/gallery_wisata/index/' . $id);
    }

    public function delete($id)
    {
        $data = $this->gallery_wisata_model->findById($id);
        $this->load->helper("file");
        $path = 'assets/upload/wisata/'.$data->foto_wisata;
        unlink($path);
        
        $this->gallery_wisata_model->delete($id);
        echo $this->session->set_flashdata('msg', array('success', 'Foto Wisata berhasil dihapus!'));
        redirect('admin/gallery_wisata/index/' . $data->wisata_id);

    }
}
