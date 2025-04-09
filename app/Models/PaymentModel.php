<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'payment';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username','bankName', 'bankAddress', 'ABA', 'swiftCode', 'IBAN', 'accountNumber', 'accountType', 'beneficiaryName',];
}


