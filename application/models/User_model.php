<?php
class User_model extends CI_Model
{
    public $id;
    public $nama;
    public $username;
    public $email;
    public $password;
    public $role;
    public $created_at;
    public $last_login;

    function validate($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $result = $this->db->get('users', 1);
        return $result;
    }
}
