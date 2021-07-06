<?php
class Jenis_kuliner_model extends CI_Model
{
    public $id;
    public $nama;

    public function getAll()
    {
        $query = $this->db->get('jenis_kuliner');
        return $query;
    }
    public function findById($id)
    {
        $query = $this->db->get_where('jenis_kuliner', ['id' => $id]);
        return $query->row();
    }

    public function getAllTotalAndOrderByNama()
    {
        $sql = 'SELECT j.*, COUNT(w.jenis_kuliner_id) AS total FROM jenis_kuliner j LEFT JOIN wisata w ON j.id = w.jenis_kuliner_id 
        GROUP BY j.id ORDER BY j.nama;';
        $query = $this->db->query($sql);
        return $query;
    }

    public function save($data)
    {
        $sql = 'INSERT INTO jenis_kuliner (nama) VALUES (?)';
        $query = $this->db->query($sql, array($data));
        return $query;
    }

    public function update($data)
    {
        $sql = 'UPDATE jenis_kuliner SET nama = ? WHERE id = ?';
        $query = $this->db->query($sql, array($data->nama, $data->id));
        return $query;
    }

    function delete($id)
    {
        $sql = "DELETE FROM jenis_kuliner WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        return $query;
    }

}
