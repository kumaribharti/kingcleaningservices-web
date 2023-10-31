<?php

namespace App\Models;

use CodeIgniter\Model;

class PriceCardModel extends Model
{
    protected $table = 'price_card';
    protected $primaryKey = 'price_card_id';
    protected $allowedFields = ['card_for', 'offer_price','mrp','saving','category_id','sub_c_id'];

    
}