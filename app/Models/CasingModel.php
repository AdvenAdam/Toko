<?php

namespace App\Models;

use CodeIgniter\Model;

class CasingModel extends Model
{
    protected $table = 'tbl_casing';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'merk', 'nama', 'slug', 'harga', 'stok', 'faktor_bentuk',
        'rincian', 'gambar', 'diskon', 'berlaku', 'harga_new'
    ];

    public function getCasing($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function diskonCasing()
    {
        return $this->where('diskon >', '0')->orderBY('id', 'DESC')->find();
    }

    public function search($merk)
    {
        return $this->where('merk', $merk)->find();
    }

    public function getSelect($faktor_bentuk)
    {
        return $this->like('faktor_bentuk', $faktor_bentuk)->find();
    }
}
