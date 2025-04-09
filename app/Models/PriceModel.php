<?php

namespace App\Models;

use CodeIgniter\Model;

class PriceModel extends Model
{
    protected $table = 'price';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','yacht_id', 'hours', 'rent', 'day', 'packs', 'mrp_price'];
}
?>