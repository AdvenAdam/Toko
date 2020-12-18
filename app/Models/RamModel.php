<?php

namespace App\Models;

use CodeIgniter\Model;

class RamModel extends Model
{
    protected $table = 'tbl_ram';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'merk', 'nama', 'slug', 'harga', 'stok', 'jenis_ram',
        'ukuran_ram', 'frekuensi', 'rincian', 'gambar', 'diskon', 'berlaku', 'harga_new'
    ];

    public function getRam($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
    public function diskonRam()
    {
        return $this->where('diskon >', '0')->orderBY('id', 'DESC')->find();
    }
    // buat ajax di rakit pc
    public function getSelect($jenis_ram)
    {
        return $this->where('jenis_ram', $jenis_ram)->find();
    }
    // Mendapatkan value stok untuk transaksi
    public function getStok($id)
    {
        return $this->select('stok')->where('id', $id)->find();
    }
    // search di nav
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
