<?php

namespace App\Models;

use CodeIgniter\Model;

class AppealModel extends Model
{
    protected $table = 'appeals';
    protected $allowedFields = ['user_id', 'appeal_reason', 'status'];
}
