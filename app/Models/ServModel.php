<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Config\I18n;

class ServModel extends Model
{
    protected $table = 'tbl_service';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama', 'slug', 'kerusakan', 'antrian_pc', 'no_hp',
        'email', 'slug', 'status', 'teknisi', 'biaya', 'rincian_service'
    ];

    public function search($keywoard)
    {
        return $this->table('tbl_service')->like('nama', $keywoard)->orLike('antrian_pc', $keywoard);
    }
    public function getServ($antrian = false)
    {
        if ($antrian == false) {
            return $this->findAll();
        }
        return $this->where(['antrian_pc' => $antrian])->find();
    }
    public function getTrx($status)
    {
        return $this->where('status', $status)->find();
    }
    public function getProses($user)
    {
        return $this->where(['status' => 'diproses', 'teknisi' => $user])->find();
    }
}
