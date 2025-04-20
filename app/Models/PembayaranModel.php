<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'metode_pembayaran',
        'bukti_pembayaran'
    ];

    protected $useTimestamps = false;
}
