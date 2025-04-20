<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'pengguna_id',
        'lapangan_id',
        'pembayaran_id',
        'tanggal',
        'total_harga',
        'status'
    ];

    protected $useTimestamps = false;

    public function withLapangan()
    {
        return $this->select('booking.*, lapangan.nama as lapangan_nama, lapangan.harga as harga_per_jam')
            ->join('lapangan', 'lapangan.id = booking.lapangan_id');
    }

    public function withPembayaran()
    {
        return $this->select('booking.*, pembayaran.metode_pembayaran, pembayaran.bukti_pembayaran')
            ->join('pembayaran', 'pembayaran.id = booking.pembayaran_id');
    }

    public function withPengguna()
    {
        return $this->select('booking.*, pengguna.nama as nama_pengguna')
            ->join('pengguna', 'pengguna.id_user = booking.pengguna_id');
    }
    public function withRelations2()
    {
        return $this->select('booking.*, lapangan.nama AS lapangan_nama, lapangan.harga AS harga_per_jam, pengguna.nama AS nama_pengguna')
            ->join('lapangan', 'lapangan.id = booking.lapangan_id')
            ->join('pengguna', 'pengguna.id_user = booking.pengguna_id')
            ->join('pembayaran', 'pembayaran.id = booking.pembayaran_id', 'left');
    }

    public function withRelations()
    {
        return $this->select('
                booking.*, 
                pengguna.nama as nama_pengguna, 
                lapangan.nama as lapangan_nama, 
                lapangan.harga as harga_per_jam,
                pembayaran.metode_pembayaran, 
                pembayaran.bukti_pembayaran
            ')
            ->join('pengguna', 'pengguna.id_user = booking.pengguna_id')
            ->join('lapangan', 'lapangan.id = booking.lapangan_id')
            ->join('pembayaran', 'pembayaran.id = booking.pembayaran_id', 'left');
    }
}
