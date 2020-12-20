<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'tbl_trx';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'jenis', 'nilai', 'rincian', 'pelanggan', 'customer_service'
    ];

    public function getTrx($slug = false)
    {
        if ($slug == false) {
            return $this->orderBY('id', 'DESC')->findAll();
        }
        return $this->where(['id' => $slug])->orderBY('id', 'DESC')->find();
    }
    public function getJenis($jenis)
    {
        return $this->where('jenis', $jenis)->find();
    }
}
