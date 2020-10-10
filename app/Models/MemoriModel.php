<?php

namespace App\Models;

use CodeIgniter\Model;

class MemoriModel extends Model
{
    protected $table = 'tbl_memori';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'merk', 'nama', 'slug', 'harga', 'stok', 'model',
        'ukuran_memori', 'jenis_memori', 'rincian', 'gambar'
    ];

    public function getMemori($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
