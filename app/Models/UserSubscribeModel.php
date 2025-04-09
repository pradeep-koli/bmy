<?php

namespace App\Models;

use CodeIgniter\Model;

class UserSubscribeModel extends Model
{
    protected $table = 'user_subscribe';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email'];
}
