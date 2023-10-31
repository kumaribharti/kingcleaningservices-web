<?php

namespace App\Models;

use CodeIgniter\Model;

class SubCategoryModel extends Model
{
    protected $table = 'subcategory';
    protected $primaryKey = 'subcategory_id';
    protected $allowedFields = ['category_id', 'sub_c_name', 'content', 'bathroom_balcony' ,'kitchen' ,'floor' ,'curtains_mattresses' , 'first_image','carpet_sofa_chairs','wall_ceiling','windows_electrical_fittings','wooden_furniture','created_at'];

    
}