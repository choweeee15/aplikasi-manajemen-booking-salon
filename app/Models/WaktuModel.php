<?php

namespace App\Models;

use CodeIgniter\Model;

class WaktuModel extends Model
{
    protected $table = 'waktu';
    protected $primaryKey = 'id';
    protected $allowedFields = ['mulai', 'selesai', 'satuan', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
