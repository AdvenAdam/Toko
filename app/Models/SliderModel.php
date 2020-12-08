<?php

namespace App\Models;

use CodeIgniter\Model;

class SliderModel extends Model
{
    protected $table = 'tbl_slider';
    protected $allowedFields = [
        'baris_satu', 'baris_dua', 'link', 'gambar'
    ];

    public function getSlider($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $slug])->first();
    }
}
