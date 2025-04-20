<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table = 'reservasi';  // Reservation table
    protected $primaryKey = 'id_reservasi';
    protected $allowedFields = [
    'id_user',
    'id_parkir',
    'kendaraan',
    'awal_waktu_reservasi',
    'akhir_waktu_reservasi',
    'total_tagihan',
    'bukti_pembayaran',
    'waktu_reservasi',
    'waktu_checkout',
    'tiket',
    'status'
];
    // Insert a new reservation record
    public function insertReservation($data)
    {
        return $this->insert($data);
    }

    // Update reservation with payment method
    public function updateReservation($id, $data)
    {
        return $this->update($id, $data);
    }



    //lapangan fungsinya dibawah ini
    // Hitung total semua reservasi
public function getTotalReservasi()
{
    return $this->countAll();
}

// Hitung total lokasi unik (jumlah lapangan/parkiran)
public function getTotalLokasiUnik()
{
    return $this->distinct()->countAllResults('lokasi');
}

// Hitung reservasi berdasarkan user dan status
public function countByUserAndStatus($userId, $status = null)
{
    $builder = $this->where('id_user', $userId);
    if ($status !== null) {
        $builder->where('status', $status);
    }
    return $builder->countAllResults();
}

}
