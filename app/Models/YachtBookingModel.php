<?php 

namespace App\Models;

use CodeIgniter\Model;

class YachtBookingModel extends Model
{
	protected $table = 'yacht_booking';
	protected $primaryKey = 'id';
	protected $allowedFields = ['yacht_id','token','username','yacht_type', 'hname', 'customer_name', 'ccount', 'phone', 'email','address','booking_date', 'booking_time', 'plan_description', "price", 'status','adate'];
}

?>