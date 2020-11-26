<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'tbl_user';
    protected $allowedFields = [
        'slug', 'username', 'password', 'no_pegawai', 'level', 'foto'
    ];
    public function getUser($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
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
}
