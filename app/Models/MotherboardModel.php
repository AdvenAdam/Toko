<?php

namespace App\Models;

use CodeIgniter\Model;

class MotherboardModel extends Model
{
    protected $table = 'tbl_motherboard';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'merk', 'nama', 'slug', 'harga', 'stok', 'socket', 'faktor_bentuk', 'jenis_ram',
        'ukuran_ram_maks', 'jml_slot_pcie', 'kekuatan_cpu', 'chipset', 'jml_slot_ram',
        'jml_slot_sata', 'jml_slot_m2', 'frekuensi_maks_ram', 'rincian', 'gambar', 'diskon', 'berlaku', 'harga_new'
    ];

    public function getMotherboard($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function diskonMobo()
    {
        return $this->where('diskon >', '0')->orderBY('id', 'DESC')->find();
    }
    // Mendapatkan value stok untuk transaksi
    public function getStok($id)
    {
        return $this->select('stok')->where('id', $id)->find();
    }
    // utk tampilan rakit pc
    public function getSelect($socket)
    {
        return $this->where('socket', $socket)->find();
    }
    // untuk cari di navbar
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
