<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $allowedFields = [
        'id_reservasi', 
        'total_tagihan', 
        'metode_pembayaran', 
        'bukti_pembayaran', 
        'total_denda', 
        'metode_pembayaran_denda', 
        'bukti_pembayaran_denda', 
        'status'
    ];
    // public function updateReservation($id, $data)
    // {
    //     return $this->update($id, $data);
    // }
    // Total tagihan dari semua pembayaran
public function getTotalPembayaran()
{
    return $this->selectSum('total_tagihan')->get()->getRow()->total_tagihan ?? 0;
}

}
