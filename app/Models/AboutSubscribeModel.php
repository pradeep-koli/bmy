<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutSubscribeModel extends Model
{
    protected $table = 'about_subscribe';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email'];
}
