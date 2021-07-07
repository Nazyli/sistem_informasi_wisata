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
    public function getAllTotalAndOrderByNama()
    {
        $sql = 'SELECT p.*, COUNT(t.profesi_id) AS total FROM profesi p LEFT JOIN testimoni t ON p.id = t.profesi_id
        GROUP BY p.id ORDER BY nama;';
        $query = $this->db->query($sql);
        return $query;
    }

    public function save($data)
    {
        $sql = 'INSERT INTO profesi (nama) VALUES (?)';
        $query = $this->db->query($sql, array($data));
        return $query;
    }

    public function update($data)
    {
        $sql = 'UPDATE profesi SET nama = ? WHERE id = ?';
        $query = $this->db->query($sql, array($data->nama, $data->id));
        return $query;
    }

    function delete($id)
    {
        $sql = "DELETE FROM profesi WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        return $query;
    }
}
