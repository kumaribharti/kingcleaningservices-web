<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceCategory extends Model
{
    protected $table = 'service_category';
    protected $primaryKey = 'category_id';
    protected $allowedFields = ['category_name', 'category_img','created_at'];

    
}