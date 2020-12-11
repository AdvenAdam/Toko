<?php

namespace App\Models;

use CodeIgniter\Model;

class WishModel extends Model
{
    protected $table = 'tbl_wishlist';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama', 'slug', 'user',
    ];

    public function getWish($user = false)
    {
        if ($user == false) {
            return $this->findAll();
        }
        return $this->where(['user' => $user])->find();
    }
}
