<?php

namespace App\Controllers;

use App\Models\AppealModel;

class AppealController extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('menu');
        echo view('footer');
        return view('appeal_form');
    }

    public function submit()
    {
        $appealModel = new AppealModel();

        // Validasi dan penyimpanan data banding
        $data = [
            'user_id' => session()->get('id'),
            'appeal_reason'  => $this->request->getPost('appeal_reason'),
            'status'  => 'pending',
        ];

        $appealModel->save($data);

        return redirect()->to('home/halamanutama')->with('message', 'Banding Anda telah diajukan!');
    }

    public function approve($id)
    {
        $appealModel = new AppealModel();
        $appealModel->update($id, ['status' => 'approved']);

        // Logika untuk mengembalikan level pengguna menjadi 2 setelah banding disetujui
        $userModel = new UserModel();
        $userModel->update($id, ['level' => 2]);

        return redirect()->to('home/halamanutama')->with('message', 'Banding telah disetujui dan pengguna di-unblock!');
    }
}
