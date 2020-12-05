<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingModel extends Model
{
    protected $table = 'tbl_rating';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'email', 'nama', 'no_hp', 'pesan', 'rating', 'pekerjaan'
    ];

    public function getRating($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
