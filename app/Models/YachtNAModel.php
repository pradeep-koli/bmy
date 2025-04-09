<?php

namespace App\Models;

use CodeIgniter\Model;

class YachtNAModel extends Model
{
    protected $table = 'tbl_yachtna';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'username', 'date', 'reason','yachtname','endtime','starttime', 'bdate'];
}

?>