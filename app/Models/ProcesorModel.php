<?php

namespace App\Models;

use CodeIgniter\Model;

class ProcesorModel extends Model
{
    protected $table = 'tbl_procesor';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'merk', 'nama', 'slug', 'harga', 'stok', 'jml_core',
        'jml_threads', 'jml_pin_cpu', 'socket', 'frekuensi', 'iGPU', 'cache', 'rincian', 'gambar', 'diskon', 'berlaku', 'harga_new'
    ];

    public function getProcesor($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function diskonProcie()
    {
        return $this->where('diskon >', '0')->orderBY('id', 'DESC')->find();
    }
}
