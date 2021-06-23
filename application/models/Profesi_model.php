<?php
class Profesi_model extends CI_Model
{
    public $id;
    public $nama;

    public function getAll(){
        $query = $this->db->get('profesi');
        return $query;
    }
    public function findById($id){
        $query = $this->db->get_where('profesi',['id'=>$id]);
        return $query->row();
    }
}
