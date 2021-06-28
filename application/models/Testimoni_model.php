<?php
class Testimoni_model extends CI_Model
{
    public $id;
    public $nama;
    public $email;
    public $wisata_id;
    public $profesi_id;
    public $rating;
    public $komentar;

    public function getAll(){
        $query = $this->db->get('testimoni');
        return $query;
    }
    public function findById($id){
        $query = $this->db->get_where('testimoni',['id'=>$id]);
        return $query->row();
    }

    public function findByWisataId($id){
        // $query = $this->db->get_where('testimoni',['wisata_id'=>$id]);
        $sql = "SELECT t.*, i.nama AS profesi FROM testimoni t JOIN profesi i ON t.profesi_id = i.id WHERE wisata_id = ?";
        $query = $this->db->query($sql, array($id));
        return $query;
    }

}
