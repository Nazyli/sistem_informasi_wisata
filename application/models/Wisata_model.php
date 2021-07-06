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

    public function getAll()
    {
        $query = $this->db->order_by('nama', 'ASC')->get('wisata');
        return $query;
    }
    public function getAllRekreasi()
    {
        $sql = 'SELECT w.*, jw.nama AS wisata FROM wisata w JOIN jenis_wisata jw ON w.jenis_wisata_id = jw.id WHERE jenis_wisata_id IS NOT NULL ORDER BY nama';
        $query = $this->db->query($sql);
        return $query;
    }
    public function getAllKuliner()
    {
        $sql = 'SELECT w.*, jk.nama AS wisata FROM wisata w JOIN jenis_kuliner jk ON w.jenis_kuliner_id = jk.id WHERE jenis_kuliner_id IS NOT NULL ORDER BY nama';
        $query = $this->db->query($sql);
        return $query;
    }
    public function findById($id)
    {
        $query = $this->db->get_where('wisata', ['id' => $id]);
        return $query->row();
    }

    public function randRekreasi($limit)
    {
        $sql = 'SELECT * FROM wisata WHERE bintang = 5 AND jenis_wisata_id IS NOT NULL ORDER BY RAND() LIMIT ?';
        $query = $this->db->query($sql, array($limit));
        return $query;
    }

    public function randKuliner($limit)
    {
        $sql = 'SELECT * FROM wisata WHERE bintang = 5 AND jenis_kuliner_id IS NOT NULL ORDER BY RAND() LIMIT ?';
        $query = $this->db->query($sql, array($limit));
        return $query;
    }

    public function getAllRekreasiNotInId($id)
    {
        $sql = 'SELECT * FROM wisata WHERE jenis_wisata_id IS NOT NULL AND id != ?';
        $query = $this->db->query($sql, array($id));
        return $query;
    }

    public function getAllKulinerNotInId($id)
    {
        $sql = 'SELECT * FROM wisata WHERE jenis_kuliner_id IS NOT NULL AND id != ?';
        $query = $this->db->query($sql, array($id));
        return $query;
    }

    function save($data)
    {
        $sql = "INSERT INTO wisata(nama, deskripsi, jenis_wisata_id, fasilitas, bintang, kontak, alamat, latlong, email, web, jenis_kuliner_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $query = $this->db->query($sql, $data);
        return $query;
    }
    function update($data)
    {
        $sql = "UPDATE wisata SET nama = ?, deskripsi = ?, jenis_wisata_id = ?, fasilitas = ?, bintang = ?, kontak = ?, alamat = ?, 
        latlong = ?, email = ?, web = ?, jenis_kuliner_id = ? WHERE id = ?";
        $query = $this->db->query(
            $sql,
            array(
                $data->nama,
                $data->deskripsi,
                $data->jenis_wisata_id,
                $data->fasilitas,
                $data->bintang,
                $data->kontak,
                $data->alamat,
                $data->latlong,
                $data->email,
                $data->web,
                $data->jenis_kuliner_id,
                $data->id
            )
        );
        return $query;
    }
    function delete($id)
    {
        $sql = "DELETE FROM wisata WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        return $query;
    }
}
