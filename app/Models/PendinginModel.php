<?php

namespace App\Models;

use CodeIgniter\Model;

class pendinginModel extends Model
{
    protected $table = 'tbl_pendingin';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'merk', 'nama', 'slug', 'harga', 'stok', 'jenis_pendingin',
        'rincian', 'gambar', 'diskon', 'berlaku', 'harga_new'
    ];

    public function getPendingin($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function diskonCooler()
    {
        return $this->where('diskon >', '0')->orderBY('id', 'DESC')->find();
    }
}
