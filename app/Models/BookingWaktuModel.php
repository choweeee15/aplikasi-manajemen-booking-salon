<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingWaktuModel extends Model
{
    protected $table            = 'booking_waktu';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['booking_id', 'waktu_id'];
    protected $useTimestamps    = false;
}
