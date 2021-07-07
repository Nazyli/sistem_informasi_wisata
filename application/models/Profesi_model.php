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
        $sql = 'SELECT p.*, (SELECT COUNT(*) FROM testimoni WHERE profesi_id =p.id) AS total_testimoni, (SELECT COUNT(*) FROM users WHERE profesi_id =p.id) AS total_user FROM profesi p 
        GROUP BY p.id ORDER BY nama';
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
