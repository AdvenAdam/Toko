<?php

namespace App\Models;

use CodeIgniter\Model;

class KasModel extends Model
{
    protected $table = 'tbl_kas';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'kode_kas', 'jenis_kas', 'uraian', 'pemasukan', 'pengeluaran',
    ];

    public function getKas($kode_kas = false)
    {
        if ($kode_kas == false) {
            return $this->findAll();
        }
        return $this->where(['kode_kas' => $kode_kas])->first();
    }
    public function getPemasukan()
    {
    }
}
