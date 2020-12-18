<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Config\I18n;

class MemoriModel extends Model
{
    protected $table = 'tbl_memori';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'merk', 'nama', 'slug', 'harga', 'stok',
        'ukuran_memori', 'jenis_memori', 'rincian', 'gambar', 'diskon', 'berlaku', 'harga_new'
    ];

    public function getMemori($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
    public function diskonMemori()
    {
        return $this->where('diskon >', '0')->orderBY('id', 'DESC')->find();
    }
    public function search($keywoard = false)
    {
        return $this->like('nama', $keywoard)->orLike('merk', $keywoard)->find();
    }
    // Mendapatkan value stok untuk transaksi
    public function getStok($id)
    {
        return $this->select('stok')->where('id', $id)->find();
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
