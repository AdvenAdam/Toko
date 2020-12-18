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

    // cari di tampilan index service
    public function search($keywoard)
    {
        return $this->like('nama', $keywoard)->orLike('antrian_pc', $keywoard)->orLike('status', $keywoard);
    }
    public function getServ($antrian = false)
    {
        if ($antrian == false) {
            return $this->findAll();
        }
        return $this->where(['antrian_pc' => $antrian])->find();
    }
    // pengelompokan di dashboard teknisi
    public function getTrx($status)
    {
        return $this->where('status', $status)->find();
    }
    // mendapatkan diproses oleh tiap userTeknisi
    public function getProses($user)
    {
        return $this->where(['status' => 'diproses', 'teknisi' => $user])->find();
    }
}
