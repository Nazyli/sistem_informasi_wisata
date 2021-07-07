<?php
class User_model extends CI_Model
{
    public $id;
    public $nama;
    public $username;
    public $email;
    public $password;
    public $role;
    public $profesi_id;
    public $created_at;
    public $last_login;

    public function getAll()
    {
        $query = $this->db->order_by('nama', 'ASC')->get('users');
        return $query;
    }

    public function findById($id)
    {
        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row();
    }

    function validate($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $result = $this->db->get('users', 1);
        return $result;
    }

    function save($data)
    {
        $sql = "INSERT INTO users (nama, username, email, password, role, profesi_id) VALUES (?,?,?,?,?,?)";
        $query = $this->db->query($sql, $data);
        return $query;
    }
    function update($data)
    {
        $sql = "UPDATE users SET nama = ?, username = ?, email = ?, password = ?, role = ?, profesi_id = ?, last_login = ? WHERE id = ?";
        // $query = $this->db->query($sql, array($data['nama'], $data['username'], $data['email'], $data['password'], $data['role'], $data['last_login'], $data['id']));
        $query = $this->db->query($sql, array($data->nama, $data->username, $data->email, $data->password, $data->role, $data->profesi_id, $data->last_login, $data->id));
        return $query;
    }

    function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        return $query;
    }
}
