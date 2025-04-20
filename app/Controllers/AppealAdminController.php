<?php

namespace App\Controllers;

use App\Models\AppealModel;
use App\Models\M_belajar;

class AppealAdminController extends BaseController
{
   public function accept($id)
{
    $appealModel = new AppealModel();
    $mBelajar = new M_belajar(); // Ganti dengan model M_belajar

    // Temukan pengajuan banding berdasarkan ID
    $appeal = $appealModel->find($id);

    // Ubah status banding menjadi 'accepted'
    $appealModel->update($id, ['status' => 'accepted']);
    
    // Unblock user dengan mengubah level mereka ke level 2 menggunakan M_belajar
    $mBelajar->update($appeal['user_id'], ['level' => 2]);

    $adminId = session()->get('id');
    $mBelajar->log_activity($adminId, "Accepted appeal for User ID {$appeal['user_id']}");

    return redirect()->back()->with('message', 'Banding diterima, Pengguna Dapat Kembali Melakukan Reservasi Parkir.');
}


    public function reject($id)
    {
        $appealModel = new AppealModel();

        // Ubah status banding menjadi 'rejected'
        $appealModel->update($id, ['status' => 'rejected']);

        $adminId = session()->get('id');
        $mBelajar->log_activity($adminId, "Rejected appeal for User ID {$appeal['user_id']}");
        
        return redirect()->back()->with('message', 'Banding ditolak.');
    }

    public function viewAppeals()
    {
        $appealModel = new AppealModel();
        $data['appeals'] = $appealModel->findAll();


        echo view('header', $data);
        echo view('menu');
        echo view('footer');

        return view('process_appeals', $data);
    }
    public function blockPengguna($id)
    {
        $mBelajar = new M_belajar(); // Ganti dengan model M_belajar

        // Update level pengguna menjadi 4 (terblokir)
        $mBelajar->update($id, ['level' => 4]);

        $adminId = session()->get('id');
        $mBelajar->log_activity($adminId, "Blocked User ID $id");

        return redirect()->back()->with('message', 'Pengguna berhasil diblokir.');
    }
}
