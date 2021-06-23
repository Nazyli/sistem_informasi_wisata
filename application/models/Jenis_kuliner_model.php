<?php
class Jenis_kuliner_model extends CI_Model
{
    public $id;
    public $nama;

    public function getAll(){
        $query = $this->db->get('jenis_kuliner');
        return $query;
    }
    public function findById($id){
        $query = $this->db->get_where('jenis_kuliner',['id'=>$id]);
        return $query->row();
    }

}
