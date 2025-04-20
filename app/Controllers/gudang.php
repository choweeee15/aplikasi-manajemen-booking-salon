<?php

namespace App\Controllers;

use App\Models\M_belajar;
use TCPDF;
use Dompdf\Dompdf;

class gudang extends BaseController
{
    public function aksi_login()
    {
        $recaptchaResponse = $this->request->getPost('g-recaptcha-response');

        
        $secretKey = '6LeHXukqAAAAAHhX0w_ooKMijr6qdwv9_XtipZIR';
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse");
        $responseKeys = json_decode($response, true);
        
        if (intval($responseKeys['success']) !== 1) {
            return redirect()->to('/home/login')->with('error', 'Please verify that you are not a robot!');
        }

        $model = new M_belajar();

        $email = $this->request->getPost('email');
        $password = md5($this->request->getPost('password'));
        $cek = $model->table('pengguna')
            ->where('email', $email)
            ->where('password', $password)
            ->get()
            ->getRow();

        if ($cek) {
            session()->set('id', $cek->id_user);
            session()->set('user', $cek->nama);
            session()->set('level', $cek->level);
            session()->set('email', $cek->email);
            session()->set('no_hp', $cek->no_hp);
            session()->set('alamat', $cek->alamat);

            $cek = session()->get('id');
            $model->log_activity($cek, "Logged in");

            $level = session()->get('level');
        if ($level == 2) {
            return redirect()->to('LapanganMapController/index');
        } else if (in_array($level, [1, 3, 10])) {
            return redirect()->to('/home/halamanutama');
        }
    } else {
        return redirect()->to('/home/login')->with('error', 'Email or password is incorrect!');
        }
    }

    public function logout()
    {
        $model = new M_belajar();
        $cek = session()->get('id');
        if ($cek) {
            $model->log_activity($cek, "Logged out");
        }
        session()->destroy();
        return redirect()->to('/home/login');
    }

    public function reset_pass($id)
    {
        $Sim = new M_belajar();
        $chiuw = array('id_user' => session()->get('id'));
        $data = array(
            "password" => MD5('1111'),
        );
        $cek = session()->get('id');
        if ($cek) {
            $Sim->log_activity($cek, "Reset Password");
        }
        $chichi['chelsica'] = $Sim->edit('pengguna', $data, $chiuw);
        return redirect()->to('gudang/profile');
    }

    public function change_pass()
    {
        $model = new M_belajar();
        $chiuw = array('id_user' => session()->get('id'));
        $data = array(
            'password' => MD5($this->request->getPost('newpassword')),
        );
        $cek = session()->get('id');
        if ($cek) {
            $model->log_activity($cek, "Change Password");
        }
        $model->edit('pengguna', $data, $chiuw);
        return redirect()->to('/gudang/profile')->with('success', 'Password successfully changed');
    }

    public function aksi_register()
    {
        $model = new M_belajar();

        $data = [
            'nama'      => $this->request->getPost('nama'),
            'email'     => $this->request->getPost('email'),
            'password'  => md5($this->request->getPost('password')),
            'no_hp' => $this->request->getPost('no_hp'),
            'alamat'     => $this->request->getPost('alamat'),
            'level'     => 2
        ];
        
        
        $model->input('pengguna', $data);
        $userId = $model->insertID(); 
        if ($userId) {
            $model->log_activity($userId, "User registered");
        }
        return redirect()->to('/home/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }


    public function editprofile()
    {
        if (session()->get('level') == 1 || session()->get('level') == 3 || session()->get('level') == 2 || session()->get('level') == 10) {
            echo view('header', $this->data);
            echo view('menu');
            echo view('edit-profile.php');
            echo view('footer');
        } else {
            return redirect()->to('/');
        }
    }


    public function profile()
    {
        if (session()->get('level') == 1 || session()->get('level') == 3 || session()->get('level') == 2 || session()->get('level') == 10) {
            $Sim = new M_belajar;

            // Fetch profile based on the user's level
            if (session()->get('level') == "2") {
                // Karyawan level, using 'karyawan' and 'pengguna' table
                $where = array('karyawan.id_user' => session()->get('id'));
                $chichi['chelsica'] = $Sim->joinw('pengguna', 'karyawan', 'pengguna.id_user=karyawan.id_user', $where);
            } else if (session()->get('level') == "1") {
                // Admin level, using 'pengguna' table
                $where = array('id_user' => session()->get('id'));
                $chichi['chelsica'] = $Sim->getWhere('pengguna', $where);
            } else if (session()->get('level') == "3") {
                // Pelanggan level, using 'pelanggan' and 'pengguna' table
                $where = array('pelanggan.id_user' => session()->get('id'));
                $chichi['chelsica'] = $Sim->joinw('pengguna', 'pelanggan', 'pengguna.id_user=pelanggan.id_user', $where);
            } else {
                return redirect()->to('/error');
            }

            // Set the user's name based on level
            $chelsica = $chichi['chelsica'];
            if (session()->get('level') == "3") {
                $chichi['name'] = $chelsica->nama_pelanggan ?? $chelsica->username;
            } else if (session()->get('level') == "2") {
                $chichi['name'] = $chelsica->nama_karyawan ?? $chelsica->username;
            } else {
                $chichi['name'] = $chelsica->username;
            }

            // Render Views
            echo view('header', $this->data);
            echo view('menu');
            echo view('profile', $chichi);
            echo view('footer');
        } else {
            return redirect()->to('/home/login');
        }
    }

    public function update_profile()
    {
        $Sim = new M_belajar();
        $userId = session()->get('id');
        $userLevel = session()->get('level');

        // Update user data based on level
        if ($userLevel == "2") {
            // Karyawan level, updating 'karyawan' table
            $where = ['karyawan.id_user' => $userId];
            $nameColumn = 'nama_karyawan';
            $table = 'karyawan';
        } elseif ($userLevel == "1") {
            // Admin level, updating 'pengguna' table
            $where = ['id_user' => $userId];
            $nameColumn = 'username';
            $table = 'pengguna';
        } elseif ($userLevel == "3") {
            // Pelanggan level, updating 'pelanggan' table
            $where = ['pelanggan.id_user' => $userId];
            $nameColumn = 'nama_pelanggan';
            $table = 'pelanggan';
        } else {
            return redirect()->to('/error')->with('error', 'Invalid user level.');
        }

        // Get the new name from the form
        $newName = $this->request->getPost('fullName');
        if (!$newName) {
            return redirect()->back()->with('error', 'Full Name is required.');
        }

        $data = [$nameColumn => $newName];
        $Sim->edit($table, $data, $where);

        // Handle profile image upload
        $file = $this->request->getFile('profile_image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $uploadPath = 'img/';
            $newFileName = $userId . '_' . $file->getRandomName();
            if ($file->move($uploadPath, $newFileName)) {
                $currentData = $Sim->getWhere('pengguna', ['id_user' => $userId]);
                $oldFileName = $currentData->foto ?? null;
                $Sim->edit('pengguna', ['foto' => $newFileName], ['id_user' => $userId]);

                // Delete old image if exists
                if ($oldFileName && file_exists($uploadPath . $oldFileName)) {
                    unlink($uploadPath . $oldFileName);
                }
            } else {
                return redirect()->back()->with('error', 'Failed to upload the profile image.');
            }
        }

        return redirect()->to('/gudang/profile')->with('successprofil', 'Profile updated successfully.');
    }

    public function delete_profile_picture()
    {
        $Sim = new M_belajar();
        $userId = session()->get('id');

        // Delete the profile picture
        $currentData = $Sim->getWhere('pengguna', ['id_user' => $userId]);
        $oldFileName = $currentData->foto ?? null;

        if ($oldFileName) {
            $filePath = 'img/' . $oldFileName;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $Sim->edit('pengguna', ['foto' => null], ['id_user' => $userId]);
        }

        return redirect()->to('/gudang/profile')->with('successprofil', 'Profile picture removed successfully.');
    }
}