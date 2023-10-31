<?php

namespace App\Models;

use CodeIgniter\Model;

class Test_modal extends Model
{
    protected $table = 'testmonial';
    protected $primaryKey = 'testmonial_id';
    protected $allowedFields = ['name', 'designation', 'user_img', 'test_descr'];

    
}