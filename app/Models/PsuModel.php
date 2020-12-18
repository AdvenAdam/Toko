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
    // Mendapatkan value stok untuk transaksi
    public function getStok($id)
    {
        return $this->select('stok')->where('id', $id)->find();
    }
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
