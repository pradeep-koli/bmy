<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{  
    protected $table = 'tbl_reservations';
    protected $primaryKey = 'id';    
    protected $allowedFields = ['uid', 'token', 'ucount', 'rdate', 'status', 'comments', 'bdate'];
}

?>