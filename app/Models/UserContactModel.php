<?php

namespace App\Models;

use CodeIgniter\Model;

class UserContactModel extends Model
{
    protected $table = 'user_contact';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'contact', 'ownerCustomer', 'subject', 'message'];
}
