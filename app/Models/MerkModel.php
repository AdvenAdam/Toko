<?php

namespace App\Models;

use CodeIgniter\Model;

class MerkModel extends Model
{
    protected $table = 'tbl_merk';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama', 'gambar', 'link'
    ];

    public function getMerk($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $slug])->first();
    }
}
