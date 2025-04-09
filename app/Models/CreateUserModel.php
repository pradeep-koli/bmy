<?php 

namespace App\Models;

use CodeIgniter\Model;

class CreateUserModel extends Model
{
	protected $table = 'tbl_users';

	protected $allowedFields = ['name', 'pwd','address', 'phone', 'email', 'type','status', 'bdate'];

}

?>