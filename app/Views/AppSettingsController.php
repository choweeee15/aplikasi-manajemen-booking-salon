<?php

namespace App\Controllers;

use App\Models\AppSettingsModel;
use CodeIgniter\Controller;

class AppSettingsController extends Controller
{
    protected $appSettingsModel;

    public function __construct()
    {
        $this->appSettingsModel = new AppSettingsModel();
    }

    // Method untuk menampilkan form pengaturan
    public function index()
    {
        $data['settings'] = $this->appSettingsModel->first(); // Ambil pengaturan pertama
        return view('app_settings/index', $data);
    }

    // Method untuk menyimpan perubahan pengaturan
    public function save()
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'app_name' => 'required|max_length[100]',
            'app_logo' => 'max_length[255]',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan data
        $appLogo = $this->request->getFile('app_logo');

        if ($appLogo && $appLogo->isValid()) {
            $logoName = $appLogo->getRandomName(); // Generate nama file random
            $appLogo->move('uploads/', $logoName); // Pindahkan logo ke folder 'uploads'
        } else {
            $logoName = $this->request->getPost('existing_logo'); // Gunakan logo yang sudah ada
        }

        $this->appSettingsModel->update(1, [
            'app_name' => $this->request->getPost('app_name'),
            'app_logo' => $logoName,
        ]);

        return redirect()->to('/app-settings')->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
