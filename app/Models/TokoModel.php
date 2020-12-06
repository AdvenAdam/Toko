<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    protected $table = 'tbl_toko';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'link', 'platform', 'link', 'gambar', 'tampil'
    ];

    public function getToko($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
