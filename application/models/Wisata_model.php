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
    public function getAllRekreasi(){
        $sql = 'SELECT * FROM wisata WHERE jenis_wisata_id IS NOT NULL';
        $query = $this->db->query($sql);
        return $query;
    }
    public function getAllKuliner(){
        $sql = 'SELECT * FROM wisata WHERE jenis_kuliner_id IS NOT NULL';
        $query = $this->db->query($sql);
        return $query;
    }
    public function findById($id){
        $query = $this->db->get_where('wisata',['id'=>$id]);
        return $query->row();
    }

    public function randRekreasi($limit){
        $sql = 'SELECT * FROM wisata WHERE bintang = 5 AND jenis_wisata_id IS NOT NULL ORDER BY RAND() LIMIT ?';
        $query = $this->db->query($sql, array($limit));
        return $query;
    }

    public function randKuliner($limit){
        $sql = 'SELECT * FROM wisata WHERE bintang = 5 AND jenis_kuliner_id IS NOT NULL ORDER BY RAND() LIMIT ?';
        $query = $this->db->query($sql, array($limit));
        return $query;
    }

    public function getAllRekreasiNotInId($id){
        $sql = 'SELECT * FROM wisata WHERE jenis_wisata_id IS NOT NULL AND id != ?';
        $query = $this->db->query($sql, array($id));
        return $query;
    }

    public function getAllKulinerNotInId($id){
        $sql = 'SELECT * FROM wisata WHERE jenis_kuliner_id IS NOT NULL AND id != ?';
        $query = $this->db->query($sql, array($id));
        return $query;
    }



}
