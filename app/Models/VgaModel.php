<?php

namespace App\Models;

use CodeIgniter\Model;

class VgaModel extends Model
{
    protected $table = 'tbl_vga';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'merk', 'nama', 'slug', 'harga', 'stok', 'base_clock',
        'boost_clock', 'ukuran_memori', 'tipe_memori', 'lebar_memori', 'konektor_daya', 'rincian', 'gambar', 'diskon', 'berlaku', 'harga_new'
    ];

    public function getVga($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function diskonVga()
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
