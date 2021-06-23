<?php
class Wisata_model extends CI_Model
{
    public $id;
    public $nama;
    public $deskripsi;
    public $jenis_wisata_id;
    public $fasilitas;
    public $bintang;
    public $kontak;
    public $alamat;
    public $latlot;
    public $email;
    public $web;
    public $jenis_kuliner_id;

    public function getAll(){
        $query = $this->db->get('wisata');
        return $query;
    }
    public function findById($id){
        $query = $this->db->get_where('wisata',['id'=>$id]);
        return $query->row();
    }

    public function randFive(){
        $query = $this->db->query('SELECT * FROM wisata WHERE bintang = 5 ORDER BY RAND() LIMIT 3');
        return $query;
    }

    public function randFour(){
        $query = $this->db->query('SELECT * FROM wisata WHERE bintang = 4 ORDER BY RAND() LIMIT 4');
        return $query;
    }

}
