<?php

namespace App\Controllers;

use App\Models\LapanganModel;
use App\Models\GambarLapanganModel;
use App\Models\WaktuModel;
use App\Models\BookingWaktuModel;
use App\Models\BookingModel;

class LapanganMapController extends BaseController
{
    public function index()
    {
        $lapanganModel = new LapanganModel();
        $gambarModel = new GambarLapanganModel();
        $waktuModel = new WaktuModel();
        $bookingModel = new BookingModel();
        $bookingWaktuModel = new BookingWaktuModel();

        $lapangan = $lapanganModel->findAll();
        $waktu = $waktuModel->findAll();

        foreach ($lapangan as &$item) {
            $item['gambar'] = $gambarModel->where('lapangan_id', $item['id'])->findAll();
        }

        $bookings = $bookingModel
            ->whereIn('status', ['Menunggu Konfirmasi', 'Terkonfirmasi', 'Sedang Menggunakan'])
            ->findAll();

        $bookedSlots = [];

        foreach ($bookings as $b) {
            $waktu_ids = $bookingWaktuModel->where('booking_id', $b['id'])->findColumn('waktu_id');
            foreach ($waktu_ids as $wid) {
                $bookedSlots[$b['lapangan_id']][$b['tanggal']][] = $wid;
            }
        }

        $data = [
            'lapangan' => $lapangan,
            'waktu' => $waktu,
            'bookedSlots' => $bookedSlots
        ];

        echo view('header');
        echo view('menu');
        echo view('lapangan_map', $data);
        echo view('footer');
    }
}
