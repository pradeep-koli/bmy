<?php

namespace App\Models;

use CodeIgniter\Model;

class FilesModel extends Model
{
    protected $table = 'files';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','yacht_id', 'images'];
}

?>