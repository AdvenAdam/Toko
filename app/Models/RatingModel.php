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
    public function getBintang0()
    {
        return $this->where('rating', null)->find();
    }
    public function getBintang1()
    {
        return $this->where('rating', 1)->find();
    }
    public function getBintang2()
    {
        return $this->where('rating', 2)->find();
    }
    public function getBintang3()
    {
        return $this->where('rating', 3)->find();
    }
    public function getBintang4()
    {
        return $this->where('rating', 4)->find();
    }
    public function getBintang5()
    {
        return $this->where('rating', 5)->find();
    }
}
