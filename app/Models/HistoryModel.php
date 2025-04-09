<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryModel extends Model
{
    protected $table = 'logs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'status', 'data_time', 'IP', 'browser', 'os'];
}
