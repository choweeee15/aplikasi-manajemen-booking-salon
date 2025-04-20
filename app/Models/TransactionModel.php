<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'pembayaran';  // Table name
    protected $primaryKey = 'id_pembayaran';  // Primary key

    protected $allowedFields = ['id_pembayaran', 'total_tagihan', 'metode_pembayaran', 'status', 'bukti_pembayaran', 'reservasi_id'];  // Fields you can manipulate

    protected $useTimestamps = true;  // If your table uses timestamps

    protected $validationRules = [
        'total_tagihan' => 'required|decimal',
        'metode_pembayaran' => 'required|string',
        'status' => 'required|string',
    ];
}
