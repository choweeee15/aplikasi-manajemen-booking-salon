<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;

class PaymentController extends Controller
{
    public function generatePdf()
    {
        // Pastikan session aktif
        if (!session()->has('id')) {
            return redirect()->to('/home/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Menghubungkan ke database
        $db = \Config\Database::connect();
        
        // Ambil data dari session
        $userId = session()->get('id');
        $level = session()->get('level');
        
        // Query untuk mengambil data pembayaran dan reservasi
        $builder = $db->table('reservasi')
            ->select('reservasi.*, parkir.lokasi, pembayaran.id_pembayaran, pembayaran.total_tagihan, pembayaran.metode_pembayaran, pembayaran.bukti_pembayaran')
            ->join('parkir', 'parkir.id_parkir = reservasi.id_parkir', 'left')
            ->join('pembayaran', 'pembayaran.id_reservasi = reservasi.id_reservasi', 'left')
            ->orderBy('reservasi.waktu_reservasi', 'DESC');

        // Jika level == 2, hanya tampilkan reservasi user yang sedang login
        if ($level == 2) {
            $builder->where('reservasi.id_user', $userId);
        }

        // Mengambil data reservasi
        $reservations = $builder->get()->getResultArray();

        // Load view HTML untuk PDF
        $htmlContent = view('payment_history_pdf', ['reservations' => $reservations]);

        // Inisialisasi DomPDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        // Load HTML ke DomPDF
        $dompdf->loadHtml($htmlContent);

        // Set ukuran kertas
        $dompdf->setPaper('A4', 'landscape');

        // Render PDF (akan memproses file HTML menjadi PDF)
        $dompdf->render();

        // Download file PDF
        $dompdf->stream("riwayat_pembayaran.pdf", array("Attachment" => 1));
    }
}
