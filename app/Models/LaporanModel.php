<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    public function getLaporan($awal, $akhir)
{
    return $this->db->table('booking')
        ->select('booking.id, booking.tanggal, booking.total_harga, pengguna.nama AS nama_pengguna, lapangan.nama AS lapangan_nama, pembayaran.metode_pembayaran, pembayaran.bukti_pembayaran')
        ->join('pengguna', 'pengguna.id_user = booking.pengguna_id', 'left')
        ->join('lapangan', 'lapangan.id = booking.lapangan_id', 'left')
        ->join('pembayaran', 'pembayaran.id = booking.pembayaran_id', 'left')
        ->where('booking.tanggal >=', $awal)
        ->where('booking.tanggal <=', $akhir)
        ->orderBy('booking.tanggal', 'ASC')
        ->get()
        ->getResultArray();
}



}
