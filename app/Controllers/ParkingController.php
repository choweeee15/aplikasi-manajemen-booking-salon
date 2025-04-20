<?php

namespace App\Controllers;

use App\Models\ParkingModel;
use App\Models\ReservationModel;
use App\Models\PaymentModel;
use App\Models\M_belajar;
use CodeIgniter\Controller;

class ParkingController extends BaseController
{
    protected $logModel;
    public function __construct()
    {
        parent::__construct();
        $this->logModel = new M_belajar();
    }
    public function showParkingMap()
    {
        if (!session()->has('id')) {
            return redirect()->to('/home/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $parkingModel = new ParkingModel();
        $user = session()->get('user');
        $level = session()->get('level');
        $kendaraan = session()->get('kendaraan');

        if ($level == 12) {
            $spaces = $parkingModel->where('tipe', $kendaraan)->findAll();
        } else {
            $spaces = $parkingModel->getAllSpaces();
        }

        $groupedSpaces = [];
        foreach ($spaces as $space) {
            $groupedSpaces[$space['tipe']][] = $space;
        }

        $data = [
            'groupedSpaces' => $groupedSpaces,
            'user' => $user
        ];

        echo view('header', $data);
        echo view('menu', $data);
        echo view('parking_map', $data);
        echo view('footer', $data);
    }

    public function bookParking()
{
    $reservationModel = new ReservationModel();
    $parkingModel = new ParkingModel();
    $paymentModel = new PaymentModel();

    $file = $this->request->getFile('bukti_pembayaran');
    $buktiPembayaran = null;

    if ($file && $file->isValid() && !$file->hasMoved()) {
        $newName = $file->getRandomName();
        $file->move('uploads/', $newName);
        $buktiPembayaran = 'uploads/' . $newName;
    } else {
        return redirect()->back()->with('error', 'Upload gagal! Pastikan file sesuai.');
    }

    $total_tagihan = $this->request->getPost('total_tagihan');
    $kode_diskon = $this->request->getPost('kode_diskon');

    $potongan = 0;
    if (!empty($kode_diskon)) {
        if ($kode_diskon === 'CASHBACK10K') {
            $potongan = 10000;
        } elseif ($kode_diskon === 'DISKON50') {
            $potongan = 0.5 * $total_tagihan;
        }
    }

    $total_tagihan -= $potongan;

    $reservationData = [
        'id_user' => $this->request->getPost('id_user'),
        'id_parkir' => $this->request->getPost('id_parkir'),
        'kendaraan' => $this->request->getPost('kendaraan'),
        'awal_waktu_reservasi' => date('Y-m-d H:i:s', strtotime($this->request->getPost('awal_waktu_reservasi'))),
        'akhir_waktu_reservasi' => date('Y-m-d H:i:s', strtotime($this->request->getPost('akhir_waktu_reservasi'))),
        'waktu_reservasi' => date('Y-m-d H:i:s'),
        'status' => 'Terbayar'
    ];

    $reservationModel->insert($reservationData);
    $idReservasi = $reservationModel->getInsertID();


    $tanggal = date('Ymd-His');
    $jenisKendaraan = strtolower($this->request->getPost('kendaraan'));
    $kodeKendaraan = ($jenisKendaraan == 'mobil') ? 'MB' : 'MT';
    $kodeTiket = "TKT-$kodeKendaraan-$tanggal-$idReservasi";
    $reservationModel->update($idReservasi, ['tiket' => $kodeTiket]);


    $paymentData = [
        'id_reservasi' => $idReservasi,
        'total_tagihan' => $total_tagihan,
        'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
        'bukti_pembayaran' => $buktiPembayaran,
        'status' => 'Lunas'
    ];

    $paymentModel->insert($paymentData);


    $idParkir = $this->request->getPost('id_parkir');
    $parkingModel->update($idParkir, ['status' => 'booked']);


    $userId = session()->get('id');
    $logMessage = "Booked a parking spot. Ticket Code: $kodeTiket, Vehicle: {$this->request->getPost('kendaraan')}, Payment Method: {$this->request->getPost('metode_pembayaran')}";
    $this->logModel->log_activity($userId, $logMessage);

    if ($potongan > 0) {
        $message = 'Reservasi berhasil! Kode Tiket: ' . $kodeTiket . '. Total tagihan setelah diskon: Rp. ' . number_format($total_tagihan, 0, ',', '.');
    } else {
        $message = 'Reservasi berhasil! Kode Tiket: ' . $kodeTiket . '. Total tagihan: Rp. ' . number_format($total_tagihan, 0, ',', '.');
    }


    return redirect()->to('/ParkingController/showParkingMap')->with('success', $message);
}




    public function showParkingHistory()
    {
        if (!session()->has('id')) {
            return redirect()->to('/home/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $reservationModel = new ReservationModel();
        $db = \Config\Database::connect();

        $userId = session()->get('id');
        $level = session()->get('level');

        $builder = $db->table('reservasi')
            ->select('reservasi.*, parkir.lokasi, pembayaran.id_pembayaran, pembayaran.total_tagihan, pembayaran.metode_pembayaran, pembayaran.bukti_pembayaran, pembayaran.total_denda, pembayaran.metode_pembayaran_denda, pembayaran.bukti_pembayaran_denda')
            ->join('parkir', 'parkir.id_parkir = reservasi.id_parkir', 'left')
            ->join('pembayaran', 'pembayaran.id_reservasi = reservasi.id_reservasi', 'left')
            ->orderBy('reservasi.waktu_reservasi', 'DESC');

        if ($level == 2) {
            $builder->where('reservasi.id_user', $userId);
        }

        $reservations = $builder->get()->getResultArray();

        $data = [
            'reservations' => $reservations
        ];

        echo view('header', $data);
        echo view('menu', $data);
        echo view('parking_history', $data);
        echo view('footer', $data);
    }
    public function showPaymentHistory()
    {
        if (!session()->has('id')) {
            return redirect()->to('/home/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $reservationModel = new ReservationModel();
        $db = \Config\Database::connect();

        $userId = session()->get('id');
        $level = session()->get('level');

        $builder = $db->table('reservasi')
            ->select('reservasi.*, parkir.lokasi, pembayaran.id_pembayaran, pembayaran.total_tagihan, pembayaran.metode_pembayaran, pembayaran.bukti_pembayaran')
            ->join('parkir', 'parkir.id_parkir = reservasi.id_parkir', 'left')
            ->join('pembayaran', 'pembayaran.id_reservasi = reservasi.id_reservasi', 'left')
            ->orderBy('reservasi.waktu_reservasi', 'DESC');


        if ($level == 2) {
            $builder->where('reservasi.id_user', $userId);
        }

        $reservations = $builder->get()->getResultArray();

        $data = [
            'reservations' => $reservations
        ];

        echo view('header', $data);
        echo view('menu', $data);
        echo view('payment_history', $data);
        echo view('footer', $data);
    }
    // public function updateStatusReservasi($id)
    // {
    //     $reservationModel = new ReservationModel();
    //     $parkingModel = new ParkingModel();
    //     $paymentModel = new PaymentModel();

    //     $reservation = $reservationModel->find($id);
    //     if (!$reservation) {
    //         return redirect()->back()->with('error', 'Reservasi tidak ditemukan.');
    //     }

    //     // Cek apakah ada pembayaran untuk reservasi ini
    //     $payment = $paymentModel->where('id_reservasi', $id)->first();

    //     $statusSekarang = $reservation['status'];
    //     $statusBaru = '';

    //     if ($statusSekarang == 'Terbayar') {
    //         if (!$payment) {
    //             return redirect()->back()->with('error', 'Reservasi belum memiliki pembayaran.');
    //         }
    //         $statusBaru = 'Confirmed';
    //     } elseif ($statusSekarang == 'Confirmed') {
    //         $statusBaru = 'Selesai';
    //         // Setelah selesai, ubah status parkir menjadi available
    //         $parkingModel->update($reservation['id_parkir'], ['status' => 'available']);
    //     } else {
    //         return redirect()->back()->with('error', 'Status tidak dapat diperbarui.');
    //     }

    //     $reservationModel->update($id, ['status' => $statusBaru]);

    //     return redirect()->back()->with('success', 'Status berhasil diperbarui menjadi ' . $statusBaru);
    // }
    public function updateStatusReservasi($id)
{
    $reservationModel = new ReservationModel();
    $parkingModel = new ParkingModel();
    $paymentModel = new PaymentModel();

    $reservation = $reservationModel->find($id);
    if (!$reservation) {
        return redirect()->back()->with('error', 'Reservation not found.');
    }

    $payment = $paymentModel->where('id_reservasi', $id)->first();
    $statusSekarang = $reservation['status'];
    $statusBaru = '';
    date_default_timezone_set('Asia/Jakarta');
    $waktuSekarang = date('Y-m-d H:i:s');
    $akhirReservasi = $reservation['akhir_waktu_reservasi'];

    if ($statusSekarang == 'Terbayar') {
        if (!$payment) {
            return redirect()->back()->with('error', 'Reservation has no payment record.');
        }
        $statusBaru = 'Confirmed';
    } elseif ($statusSekarang == 'Confirmed') {
        $statusBaru = 'Checked-in';
    } elseif ($statusSekarang == 'Checked-in') {
        if ($waktuSekarang > $akhirReservasi) {
            $denda = 15000;
            $paymentModel->where('id_reservasi', $id)->set([
                'total_denda' => $denda,
                'bukti_pembayaran_denda' => null
            ])->update();
            $reservationModel->update($id, [
                'status' => 'Waiting for Fine Payment',
                'total_denda' => $denda
            ]);

            // Log activity
            $userId = session()->get('id_user');
            $logMessage = "User ID $userId exceeded reservation time. Fine imposed: Rp$denda.";
            $this->logModel->log_activity($userId, $logMessage);

            return redirect()->back()->with('error', 'Check-out exceeded reservation time! Please upload fine payment proof.');
        } else {
            $statusBaru = 'Checked-out';
            $parkingModel->update($reservation['id_parkir'], ['status' => 'available']);
            $reservationModel->update($id, ['waktu_checkout' => $waktuSekarang]);
        }
    } else {
        return redirect()->back()->with('error', 'Status update failed.');
    }

    $reservationModel->update($id, ['status' => $statusBaru]);

    $userId = session()->get('id_user');
    $logMessage = "Updated reservation status. New status: $statusBaru.";
    $this->logModel->log_activity($userId, $logMessage);

    return redirect()->back()->with('success', 'Status successfully updated to ' . $statusBaru);
}

public function bayarDenda($id_reservasi)
{
    $reservationModel = new ReservationModel();
    $paymentModel = new PaymentModel();

    $file = $this->request->getFile('bukti_pembayaran_denda');
    
    if ($file->isValid() && !$file->hasMoved()) {
        $fileName = $file->getRandomName();
        $file->move('uploads/', $fileName);

        $paymentModel->where('id_reservasi', $id_reservasi)
            ->set([
                'total_denda' => 15000,
                'metode_pembayaran_denda' => $this->request->getPost('metode_pembayaran_denda'),
                'bukti_pembayaran_denda' => 'uploads/' . $fileName
            ])
            ->update();

        $reservationModel->update($id_reservasi, ['status' => 'Checked-out']);

        $userId = session()->get('id_user');
        $logMessage = "Paid the fine for reservation ID $id_reservasi. Payment method: {$this->request->getPost('metode_pembayaran_denda')}.";
        $this->logModel->log_activity($userId, $logMessage);

        return redirect()->back()->with('success', 'Fine successfully paid.');
    } else {
        return redirect()->back()->with('error', 'Failed to upload payment proof.');
    }
}

    public function checkLateReservations()
    {
        $reservationModel = new \App\Models\ReservationModel();
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date('Y-m-d H:i:s');

        $lateReservations = $reservationModel->where('akhir_waktu_reservasi <', $currentTime)
            ->where('status !=', 'Checkout')
            ->findAll();

        return $this->response->setJSON($lateReservations);
    }

    // public function uploadBuktiDenda($id)
    // {
    //     $paymentModel = new PaymentModel();
    //     $reservationModel = new ReservationModel();

    //     $payment = $paymentModel->where('id_reservasi', $id)->first();
    //     if (!$payment || empty($payment['total_denda'])) {
    //         return redirect()->back()->with('error', 'Tidak ada denda yang harus dibayar.');
    //     }

    //     $file = $this->request->getFile('bukti_pembayaran_denda');
    //     if ($file && $file->isValid() && !$file->hasMoved()) {
    //         $newName = $file->getRandomName();
    //         $file->move('uploads/bukti_denda', $newName);
    //         $filePath = 'uploads/bukti_denda/' . $newName;
    //         $paymentModel->where('id_reservasi', $id)->set([
    //             'bukti_pembayaran_denda' => $filePath
    //         ])->update();
    //         $reservationModel->update($id, ['status' => 'Checkout']);

    //         return redirect()->back()->with('success', 'Bukti pembayaran denda berhasil diunggah.');
    //     } else {
    //         return redirect()->back()->with('error', 'Gagal mengunggah bukti pembayaran denda.');
    //     }
    // }


    public function cctv()
    {
        
        if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 10) {

         
            $streams = [
                'http://83.48.75.113:8320/axis-cgi/mjpg/video.cgi',
                'http://46.19.234.136/axis-cgi/mjpg/video.cgi',
                'http://5.172.188.145:9995/axis-cgi/mjpg/video.cgi',
                'http://166.151.98.221:7001/cgi-bin/faststream.jpg?stream=full&fps=25',
                'http://90.146.10.190/mjpg/video.mjpg',
                'http://renzo.dyndns.tv/mjpg/video.mjpg'
            ];

            
            $data = [
                'streams' => $streams
            ];

            
            echo view('header.php');
            echo view('menu.php');
            echo view('cctv.php', $data); 
            echo view('footer.php');
        } else {
            
            return redirect()->to('/home/halamanutama');
        }
    }
public function showDashboard()
{
    $reservationModel = new ReservationModel();


    $userId = session()->get('id');
    
    $total_reservasi = $reservationModel->where('id_user', $userId)->where('status', 'Selesai')->countAllResults();


    $kode_diskon = null;
    if ($total_reservasi >= 2) {
        $kode_diskon = 'DISKON20';
    }

    // Kirim data ke view
    return view('dashboard', [
        'total_reservasi' => $total_reservasi,
        'reservasi_berjalan' => $reservationModel->where('id_user', $userId)->where('status', 'Berjalan')->countAllResults(),
        'reservasi_selesai' => $reservationModel->where('id_user', $userId)->where('status', 'Selesai')->countAllResults(),
        'kode_diskon' => $kode_diskon
    ]);
}



}
