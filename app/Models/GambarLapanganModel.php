<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarLapanganModel extends Model
{
    protected $table      = 'gambar_lapangan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'lapangan_id',
        'file',
        'created_at'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
}
