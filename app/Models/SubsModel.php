<?php

namespace App\Models;

use CodeIgniter\Model;

class SubsModel extends Model
{
    protected $table = 'tbl_subscribe';
    protected $allowedFields = [
        'emailsub'
    ];

    public function getSubs($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
