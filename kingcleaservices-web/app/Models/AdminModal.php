<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModal extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id  ';
    protected $allowedFields = ['*'];


    public function getuserbyemail($email,$password)
    {
        return $this->where('user_id', $email)
                    ->where('user_password', $password)
                    ->first();
    }

    
}
