<?php

namespace App\Models;

use CodeIgniter\Model;

class YachtModel extends Model
{
    protected $table = 'yacht';
    
    protected $allowedFields = ['id', 'days', 'start_time', 'end_time', 'mintime', 'username', 'status', 'about', 'location', 'address', 'build_name', 'yacht_length', 'size', 'hname', 'yacht_type', 'engine', 'max_speed', 'builder', 'year_of_build', 'guest', 'cabin','price','thumb-img','other'];
}
