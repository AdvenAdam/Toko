<?php

namespace App\Models;

use CodeIgniter\Model;

class PsuModel extends Model
{
    protected $table = 'tbl_psu';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'merk', 'nama', 'slug', 'harga', 'stok', 'sertifikat',
        'jml_pin_cpu', 'jenis_kabel', 'mb_power', 'rincian', 'gambar', 'diskon', 'berlaku', 'harga_new'
    ];

    public function getPsu($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
    public function diskonPsu()
    {
        return $this->where('diskon >', '0')->orderBY('id', 'DESC')->find();
    }
}
