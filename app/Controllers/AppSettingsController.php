<?php

namespace App\Controllers;

use App\Models\AppSettingsModel;
use App\Models\M_belajar;
use App\Events\UserActivityEvent;
use CodeIgniter\Events\Events;
use CodeIgniter\Controller;

class AppSettingsController extends BaseController
{
    protected $appSettingsModel;
    protected $logModel;
    public function __construct()
    {
        parent::__construct();
        $this->appSettingsModel = new AppSettingsModel();
        $this->logModel = new M_belajar();
    }

    public function pengaturan()
    {
        $data = $this->data;
        $data['settings'] = $this->appSettingsModel->first();
        echo view('header.php', $data);
        echo view('menu.php');
        echo view('app_settings/index', $data);
        echo view('footer.php');
    }

    public function save()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'app_name' => 'required|max_length[100]',
        ];

        $appLogo = $this->request->getFile('app_logo');

        if ($appLogo && $appLogo->isValid() && !$appLogo->hasMoved()) {
            $rules['app_logo'] = 'max_size[app_logo,2048]|is_image[app_logo]|mime_in[app_logo,image/png,image/jpg,image/jpeg]';
        }

        $validation->setRules($rules);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $settings = $this->appSettingsModel->first();
        $logoName = $settings['app_logo'] ?? '';

        if ($appLogo && $appLogo->isValid() && !$appLogo->hasMoved()) {
            $logoName = $appLogo->getRandomName();
            $appLogo->move('uploads/', $logoName);
        }
        $adminId = session()->get('id');
        if ($settings) {
            $this->appSettingsModel->update($settings['id'], [
                'app_name' => $this->request->getPost('app_name'),
                'app_logo' => $logoName,
            ]);
            $this->logModel->log_activity($adminId, "Updated Aplication Name: " . $this->request->getPost('app_name'));

        } else {
            $this->appSettingsModel->insert([
                'app_name' => $this->request->getPost('app_name'),
                'app_logo' => $logoName,
            ]);
            $this->logModel->log_activity($adminId, "Set Aplication: " . $this->request->getPost('app_name'));
        }

        return redirect()->to(base_url('AppSettingsController/pengaturan'))
            ->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
