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
    // mendapat nila casing all
    public function getCasing($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    // untuk menentukan diskon di tampilan depan
    public function diskonCasing()
    {
        return $this->where('diskon >', '0')->orderBY('id', 'DESC')->find();
    }
    // untuk simulasi rakit
    public function getSelect($faktor_bentuk)
    {
        return $this->like('faktor_bentuk', $faktor_bentuk)->find();
    }
    // Mendapatkan value stok untuk transaksi
    public function getStok($id)
    {
        return $this->select('stok')->where('id', $id)->find();
    }
    // Menadapatkan Search di HOme
    public function search($keywoard = false)
    {
        return $this->like('nama', $keywoard)->orLike('merk', $keywoard)->find();
    }
    // untuk v_shop di halaman home depan
    public function vShop($limit = false)
    {
        if ($limit == false) {
            return $this->findAll();
        }

        return $this->limit($limit)->orderBY('id', 'DESC')->find();
    }
}
