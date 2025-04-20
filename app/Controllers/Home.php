<?php

namespace App\Controllers;

use App\Models\ReservationModel;
use App\Models\PaymentModel;
use App\Models\M_belajar;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\LogActivityModel;

class Home extends BaseController
{
    public function index()
    {
        if (!session()->has('id')) {
            return redirect()->to('/home/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        echo view('header');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
    }

    public function login()
    {
        echo view('loginn');
    }
    public function halamanutama()
    {
        if (!session()->has('id')) {
            return redirect()->to('/home/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        echo view('header');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
    }


    public function pengguna()
    {
        if (session()->get('level') == 1 || session()->get('level') == 3 || session()->get('level') == 10) {
            $Joyce = new M_belajar();
            $filter = $this->request->getGet('filter');

            if ($filter == 'deleted') {

                $data['pengguna'] = $Joyce->tampilTerhapus('pengguna', 'id_user');
            } else {

                $data['pengguna'] = $Joyce->tampilAktif('pengguna', 'id_user');
            }

            echo view('header.php');
            echo view('menu.php');
            echo view('pengguna_view.php', $data);
            echo view('footer.php');
        } else {
            return redirect()->to('home');
        }
    }


    // public function pengguna()
    // {
    //     if (session()->get('level') == 1) {
    //         $Joyce = new M_belajar();
    //         $data['pengguna'] = $Joyce->tampil('pengguna', 'id_user');
    //         echo view('header.php');
    //         echo view('menu.php');
    //         echo view('pengguna_view.php', $data);
    //         echo view('footer.php');
    //     } else {
    //         return redirect()->to('home');
    //     }
    // }
    public function hapusPengguna($id_user)
    {
        if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3 || session()->get('level') == 10) {
            $Joyce = new M_belajar();
            $data = ['soft_delete' => 1];
            $where = ['id_user' => $id_user];
            $Joyce->updateData('pengguna', $data, $where);
            $adminId = session()->get('id');
            $Joyce->log_activity($adminId, "Delete User ID $id_user");
            return redirect()->to(base_url('home/pengguna'));
        } else {
            return redirect()->to('home');
        }
    }
    public function restorePengguna($id_user)
    {
        if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3 || session()->get('level') == 10) {
            $Joyce = new M_belajar();
            $data = ['soft_delete' => 0]; // Ubah status soft_delete menjadi 0 (aktif kembali)
            $where = ['id_user' => $id_user];
            $Joyce->updateData('pengguna', $data, $where);
            $adminId = session()->get('id');
            $Joyce->log_activity($adminId, "Restore User ID $id_user");
            return redirect()->to(base_url('home/pengguna'));
        } else {
            return redirect()->to('home');
        }
    }
    public function restoreSemua()
    {
        if (session()->get('level') == 3 || session()->get('level') == 10) {
            $Joyce = new M_belajar();
            $Joyce->updateData('pengguna', ['soft_delete' => 0], ['soft_delete' => 1]);
            $adminId = session()->get('id');
            $Joyce->log_activity($adminId, "Restore All Deleted User");
            return redirect()->to(base_url('home/pengguna?filter=deleted'))->with('success', 'Semua pengguna telah dipulihkan.');
        } else {
            return redirect()->to('home');
        }
    }

    public function hapusPenggunaPermanen($id_user)
    {
        if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3 || session()->get('level') == 10) {
            $Joyce = new M_belajar();
            $where = ['id_user' => $id_user];
            $Joyce->hapus('pengguna', $where);
            $adminId = session()->get('id');
            $Joyce->log_activity($adminId, "Permantly Delete User ID $id_user");
            return redirect()->to(base_url('home/pengguna?filter=deleted'));
        } else {
            return redirect()->to('home');
        }
    }

    public function tambahPengguna()
    {
        if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3 || session()->get('level') == 10) {
            $Joyce = new M_belajar();
            $cek = session()->get('id_user');
            $Joyce->log_activity($cek->id_user, "User added");

            // Contoh: Ambil data pengguna atau level jika diperlukan di view
            $data['pengguna'] = $Joyce->tampil('pengguna', 'id_user'); // Misal tampilkan daftar pengguna
            $data['level'] = session()->get('level');  // Atau data level pengguna yang login

            // Mengirim data ke view
            echo view('header.php');
            echo view('menu.php');
            echo view('pengguna_tambah.php', $data);
            echo view('footer.php');
        } else {
            return redirect()->to('home');
        }
    }


    public function simpanPengguna()
    {
        if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3 || session()->get('level') == 10) {
            $Joyce = new M_belajar();
            $data = [
                'nama' => $this->request->getPost('nama'),
                'no_hp' => $this->request->getPost('no_hp'),
                'level' => $this->request->getPost('level'),
                'email' => $this->request->getPost('email'),
                'password' => md5($this->request->getPost('password')),
                'alamat' => $this->request->getPost('alamat'),
            ];

            // Menambahkan data pengguna ke dalam tabel
            $Joyce->input('pengguna', $data);
            $adminId = session()->get('id');
            $Joyce->log_activity($adminId, "Added User ID " . $data['nama']);
            return redirect()->to(base_url('home/pengguna'));
        } else {
            return redirect()->to('home');
        }
    }


    public function editPengguna($id_user)
    {
        if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3 || session()->get('level') == 10) {
            $Joyce = new M_belajar();
            $data['pengguna'] = $Joyce->getWhere('pengguna', ['id_user' => $id_user]);

            // Cek apakah pengguna ditemukan
            if ($data['pengguna']) {
                echo view('header.php');
                echo view('menu.php');
                echo view('pengguna_edit.php', $data);
                echo view('footer.php');
            } else {
                return redirect()->to('home/pengguna');
            }
        } else {
            return redirect()->to('home');
        }
    }

    public function updatePengguna($id_user)
    {
        if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3 || session()->get('level') == 10) {
            $Joyce = new M_belajar();

            $data = [
                'nama' => $this->request->getPost('nama'),
                'no_hp' => $this->request->getPost('no_hp'),
                'level' => $this->request->getPost('level'),
                'email' => $this->request->getPost('email'),
                'alamat' => $this->request->getPost('alamat'),
            ];

            $password = $this->request->getPost('password');
            if (!empty($password)) {
                $data['password'] = md5($password);
            }

            $Joyce->edit('pengguna', $data, ['id_user' => $id_user]);
            $adminId = session()->get('id');
            $Joyce->log_activity($adminId, "Updated User ID $id_user");

            return redirect()->to(base_url('home/pengguna'));
        } else {
            return redirect()->to('home');
        }
    }













    public function logactivity()
    {
        echo view('header', $this->data);
        echo view('log_activity');
        echo view('footer');
    }

    public function register()
    {
        echo view('header', $this->data);
        echo view('register');
        echo view('footer');
    }

    public function rules()
    {
        echo view('header', $this->data);
        echo view('menu');
        echo view('rules');
        echo view('footer');
    }

    public function pagesfaq()
    {
        echo view('header', $this->data);
        echo view('menu');
        echo view('pages-faq');
        echo view('footer');
    }


    public function forgot_password()
    {
        $email = $this->request->getPost('email');

        if ($email) {

            $userModel = new M_belajar();

            $user = $userModel->where('email', $email)->first();

            if ($user) {

                $token = bin2hex(random_bytes(16));
                $resetLink = base_url("/home/reset_password?token=$token");

                if ($this->sendResetLink($email, $resetLink)) {

                    $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));
                    $userModel->edit('pengguna', ['token' => hash('sha256', $token), 'expiry' => $expiry], ['email' => $email]);

                    session()->setFlashdata('message', "A password reset link has been sent to your email.");
                } else {
                    session()->setFlashdata('message', 'There was an issue sending the reset link. Please try again later.');
                }

                return redirect()->to('/home/forgot_password');
            } else {

                session()->setFlashdata('message', 'No user found with this email.');
                return redirect()->to('/home/forgot_password');
            }
        }

        return view('forgot_password');
    }

    private function sendResetLink($email, $link)
    {

        $emailConfig = [
            'protocol' => 'smtp',
            'SMTPHost' => 'smtp.gmail.com',
            'SMTPUser' => 'xoxokizandhug@gmail.com',
            'SMTPPass' => 'jslu rqgj tlmh sclv',
            'SMTPPort' => 587,
            'mailType'  => 'html',
            'charset'   => 'utf-8',
            'wordWrap'  => TRUE,
            'SMTPCrypto' => 'tls',
        ];

        \Config\Services::email()->initialize($emailConfig);

        $emailService = \Config\Services::email();
        $emailService->setFrom('xoxokizandhug@gmail.com', 'Manajemen Parkir Online');
        $emailService->setTo($email);
        $emailService->setSubject('Password Reset Link');
        $emailService->setMessage("Click the following link to reset your password: \n" . $link);


        if ($emailService->send()) {
            return true;
        } else {

            log_message('error', 'Email sending failed: ' . $emailService->printDebugger());
            return false;
        }
    }

    public function reset_password()
    {

        $token = $this->request->getGet('token');

        if (!$token) {

            session()->setFlashdata('message', 'Invalid or missing token.');
            return redirect()->to('/home/forgot_password');
        }

        $hashedToken = hash('sha256', $token);

        $userModel = new M_belajar();

        $user = $userModel->where('token', $hashedToken)->first();

        if ($user) {

            $expiry = strtotime($user['expiry']);

            if ($expiry > time()) {

                return view('reset_password', ['token' => $token]);
            } else {
                // Token has expired
                session()->setFlashdata('message', 'The token has expired.');
                return redirect()->to('/home/forgot_password');
            }
        } else {

            session()->setFlashdata('message', 'Invalid token.');
            return redirect()->to('/home/forgot_password');
        }
    }

    public function update_password()
    {
        $Sim = new M_belajar();
        // $token = $_GET['token'] ?? '';
        $token = $this->request->getPost('token');

        $token_hash = hash('sha256', $token);


        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if ($password !== $confirmPassword) {
            $data['message'] = "Passwords do not match.";
            $data['type'] = "error";
            return view('status_view', $data);
        }

        date_default_timezone_set('Asia/Jakarta');

        $reset = $Sim->getWhere('pengguna', ['token' => $token_hash]);
        // dd($reset);
        if (!$reset || !is_object($reset) || strtotime($reset->expiry) < time()) {

            $data['message'] = "Invalid or expired token.";
            $data['type'] = "error";
            return view('status_view', $data);
        }

        $hashedPassword = md5($password);
        $Sim->set([
            'password' => $hashedPassword,
            'token' => null,
            'expiry' => null
        ])
            ->where('nama', $reset->nama)
            ->update();

        // dd($Sim->getLastQuery());
        // Success message
        $data['message'] = "Your password has been updated successfully.";
        $data['type'] = "success";
        return view('status_view', $data);
    }
}
