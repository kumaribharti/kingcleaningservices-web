<?php

namespace App\Models;

use CodeIgniter\Model;

class Table_data_Model extends Model
{
    protected $table = 'table_data';
    protected $primaryKey = 'table_id';
    protected $allowedFields = ['field_1', 'field_2','field_3','category_id'];

    
}