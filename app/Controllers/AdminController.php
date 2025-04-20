<?php

namespace App\Controllers;

use App\Models\LogAktivitasModel;

class AdminController extends BaseController
{
    // Fungsi untuk menampilkan log aktivitas
    public function tampilkanLog()
    {
        // Ambil parameter pencarian dari form
        $searchQuery = $this->request->getGet('search');

        // Membuat objek model untuk log aktivitas
        $logModel = new LogAktivitasModel();

        // Jika ada query pencarian
        if ($searchQuery) {
            // Menyaring data log berdasarkan pencarian (misalnya berdasarkan nama pengguna)
            $logs = $logModel->like('nama_user', $searchQuery)->findAll();
        } else {
            // Ambil semua data log aktivitas
            $logs = $logModel->findAll();
        }

        // Kirim data log ke view
        return view('admin/log_aktivitas', ['logs' => $logs, 'searchQuery' => $searchQuery]);
    }
}
