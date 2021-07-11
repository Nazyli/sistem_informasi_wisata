<?php
class Jenis_wisata_model extends CI_Model
{
    public $id;
    public $nama;

    public function getAll()
    {
        $query = $this->db->get('jenis_wisata');
        return $query;
    }
    public function findById($id)
    {
        $query = $this->db->get_where('jenis_wisata', ['id' => $id]);
        return $query->row();
    }

    public function getAllTotalAndOrderByNama()
    {
        $sql = 'SELECT j.*, COUNT(w.jenis_wisata_id) AS total FROM jenis_wisata j LEFT JOIN wisata w ON j.id = w.jenis_wisata_id 
        GROUP BY j.id ORDER BY j.nama;';
        $query = $this->db->query($sql);
        return $query;
    }

    public function save($data)
    {
        $sql = 'INSERT INTO jenis_wisata (nama) VALUES (?)';
        $query = $this->db->query($sql, array($data));
        return $query;
    }

    public function update($data)
    {
        $sql = 'UPDATE jenis_wisata SET nama = ? WHERE id = ?';
        $query = $this->db->query($sql, array($data->nama, $data->id));
        return $query;
    }

    function delete($id)
    {
        $sql = "DELETE FROM jenis_wisata WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        return $query;
    }
}
