<?php

namespace App\Models;

use CodeIgniter\Model;

class EnquiryFormModel extends Model
{
    protected $table = 'enquiry_form';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email','phone','location','budget','people','enquiry'];
}
