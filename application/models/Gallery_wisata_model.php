<?php
class Gallery_wisata_model extends CI_Model
{
    public $id;
    public $foto;
    public $wisata_id;

    public function findById($id)
    {
        $query = $this->db->get_where('gallery_wisata', ['id' => $id]);
        return $query->row();
    }
    public function findByWisataId($id)
    {
        $query = $this->db->get_where('gallery_wisata', ['wisata_id' => $id]);
        return $query;
    }

    public function save($data)
    {
        $sql = 'INSERT INTO gallery_wisata (foto_wisata, wisata_id) VALUES (?, ?)';
        $query = $this->db->query($sql, $data);
        return $query;
    }

    public function update($data)
    {
        $sql = 'UPDATE gallery_wisata SET foto_wisata = ?, wisata_id WHERE id = ?';
        $query = $this->db->query($sql, array($data->foto_wisata, $data->wisata_id, $data->id));
        return $query;
    }

    function delete($id)
    {
        $sql = "DELETE FROM gallery_wisata WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        return $query;
    }
}
