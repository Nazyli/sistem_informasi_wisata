<?php
class Jenis_wisata_model extends CI_Model
{
    public $id;
    public $nama;

    public function getAll(){
        $query = $this->db->get('jenis_wisata');
        return $query;
    }
    public function findById($id){
        $query = $this->db->get_where('jenis_wisata',['id'=>$id]);
        return $query->row();
    }

}
