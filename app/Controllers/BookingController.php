<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\PembayaranModel;
use App\Models\BookingWaktuModel;
use App\Models\LapanganModel;
use App\Models\M_belajar;
use App\Models\WaktuModel;
use CodeIgniter\Controller;
use App\Models\LogActivityModel;

class BookingController extends BaseController
{
    public function simpan()
    {
        $bookingModel = new BookingModel();
        $pembayaranModel = new PembayaranModel();
        $bookingWaktuModel = new BookingWaktuModel();
        $logModel = new LogActivityModel();
        $Joyce = new M_belajar();

        $lapangan_id = $this->request->getPost('lapangan_id');
        $tanggal = $this->request->getPost('tanggal');
        $metode = $this->request->getPost('metode_pembayaran');
        $waktu_ids = $this->request->getPost('waktu_id');

        $bukti = $this->request->getFile('bukti_pembayaran');
        $pengguna_id = session()->get('id') ?? null;
        if (!$pengguna_id) {
            return redirect()->back()->with('error', 'Pengguna tidak terautentikasi.');
        }

        if (!$bukti || !$bukti->isValid() || $bukti->hasMoved()) {
            return redirect()->back()->with('error', 'Upload bukti gagal atau tidak valid.');
        }

        $namaBukti = $bukti->getRandomName();
        $bukti->move('uploads/bukti/', $namaBukti);

        $pembayaran_id = $pembayaranModel->insert([
            'metode_pembayaran' => $metode,
            'bukti_pembayaran' => $namaBukti
        ]);

        if (!$pembayaran_id) {
            return redirect()->back()->with('error', 'Gagal menyimpan data pembayaran: ' . json_encode($pembayaranModel->errors()));
        }

        $hargaPerWaktu = db_connect()->table('lapangan')->select('harga')->where('id', $lapangan_id)->get()->getRow('harga');
        if (!$hargaPerWaktu) {
            return redirect()->back()->with('error', 'Lapangan tidak ditemukan.');
        }

        $totalHarga = count($waktu_ids) * $hargaPerWaktu;

        $booking_id = $bookingModel->insert([
            'pengguna_id' => session()->get('id'),
            'lapangan_id' => $lapangan_id,
            'pembayaran_id' => $pembayaran_id,
            'tanggal' => $tanggal,
            'total_harga' => $totalHarga,
            'status' => 'Menunggu Konfirmasi'
        ]);

        if (!$booking_id) {
            return redirect()->back()->with('error', 'Gagal menyimpan data booking: ' . json_encode($bookingModel->errors()));
        }

        foreach ($waktu_ids as $waktu_id) {
    $insert = $bookingWaktuModel->insert([
        'booking_id' => $booking_id,
        'waktu_id' => $waktu_id
    ]);

    if (!$insert) {
        return redirect()->back()->with('error', 'Gagal menyimpan waktu booking: ' . json_encode($bookingWaktuModel->errors()));
    }
}

           $lapangan = db_connect()->table('lapangan')->select('nama')->where('id', $lapangan_id)->get()->getRow();
            $namaLapangan = $lapangan ? $lapangan->nama : 'Unknown Arena';

            $cek = session()->get('id');
            $Joyce->log_activity($cek, "Has Booked a $namaLapangan");

        return redirect()->back()->with('success', 'Booking berhasil disimpan!');
    }


    public function history()
    {
        if (!session()->has('id')) {
            return redirect()->to('/home/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $bookingModel = new BookingModel();
        $bookingWaktuModel = new BookingWaktuModel();
        $waktuModel = new WaktuModel();

        $bookingQuery = $bookingModel->withRelations()->orderBy('tanggal', 'DESC');

        if (session()->get('level') == 2) {
            $bookingQuery->where('pengguna_id', session()->get('id'));
        }

        $bookings = $bookingQuery->findAll();

        foreach ($bookings as &$booking) {
            $waktuIds = $bookingWaktuModel->where('booking_id', $booking['id'])->findAll();
            $waktuList = [];

            foreach ($waktuIds as $w) {
                $waktuDetail = $waktuModel->find($w['waktu_id']);
                if ($waktuDetail) {
                    $waktuList[] = $waktuDetail['mulai'] . ' - ' . $waktuDetail['selesai'] . ' ' . $waktuDetail['satuan'];
                }
            }

            $booking['waktu'] = $waktuList;
        }

        return view('header')
            . view('menu')
            . view('booking_history', ['bookings' => $bookings])
            . view('footer');
    }
    public function update_status($id)
    {
        $status = $this->request->getPost('status');
        $bookingModel = new BookingModel();

        $booking = $bookingModel->find($id);
        if (!$booking) {
            return redirect()->back()->with('error', 'Booking tidak ditemukan.');
        }

        $booking['status'] = $status;

        if ($bookingModel->save($booking)) {
            return redirect()->to('/booking/history')->with('success', 'Status booking berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui status booking.');
        }
    }


    public function showPaymentHistory()
{
    if (!session()->has('id')) {
        return redirect()->to('/home/login')->with('error', 'Anda harus login terlebih dahulu.');
    }

    $bookingModel = new BookingModel();
    $bookingWaktuModel = new BookingWaktuModel();
    $waktuModel = new WaktuModel();

    $level = session()->get('level');
    $userId = session()->get('id');

    $bookingQuery = $bookingModel->withRelations()->orderBy('tanggal', 'DESC');

    // Jika level 2, hanya lihat miliknya sendiri
    if ($level == 2) {
        $bookingQuery->where('pengguna_id', $userId);
    }

    $bookings = $bookingQuery->findAll();

    foreach ($bookings as &$booking) {
        $waktuIds = $bookingWaktuModel->where('booking_id', $booking['id'])->findAll();
        $waktuList = [];

        foreach ($waktuIds as $w) {
            $waktuDetail = $waktuModel->find($w['waktu_id']);
            if ($waktuDetail) {
                $waktuList[] = $waktuDetail['mulai'] . ' - ' . $waktuDetail['selesai'] . ' ' . $waktuDetail['satuan'];
            }
        }

        $booking['waktu'] = $waktuList;
    }

    return view('header')
        . view('menu')
        . view('payment_history_lapangan', ['bookings' => $bookings])
        . view('footer');
}


}
