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
}
