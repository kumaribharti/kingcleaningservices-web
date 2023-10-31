<?php

namespace App\Models;

use CodeIgniter\Model;

class OurworkModel extends Model
{
    protected $table = 'ourwork';
    protected $primaryKey = 'work_id';
    protected $allowedFields = ['title', 'ourwork_img','created_at'];

    
}