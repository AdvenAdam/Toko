<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'tbl_user';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'slug', 'username', 'password', 'no_pegawai', 'level', 'foto', 'email'
    ];
    public function getUser($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
    }

    public function login($username, $password, $query)
    {

        $cekuser = $this->db->table('tbl_user')->where(
            [
                'username' => $username,
            ]
        )->get()->getRowArray();

        foreach ($query as $result) {
            if (password_verify($password, $result['password'])) {
                return $cekuser;
            } else {
                echo "Jancok salaj";
            }
        }
    }
    public function getGuest()
    {
        return $this->where('level', 'Guest')->find();
    }
    public function getTeknisi()
    {
        return $this->where('level', 'Teknisi')->find();
    }
    public function getNotguest()
    {
        return $this->where('level !=', 'Guest')->find();
    }
}
