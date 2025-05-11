<?php

namespace App\Controllers;

use App\Models\M_belajar;
use TCPDF;
use Dompdf\Dompdf;
use App\Models\ReservationModel;
use App\Models\PaymentModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\LogActivityModel;

class LoginController extends BaseController
{
	 // public function login()
  //   {
  //       echo view('loginn');
  //   }
	// public function aksi_login()
 //    {
 //        $recaptchaResponse = $this->request->getPost('g-recaptcha-response');

        
 //        $secretKey = '6LeHXukqAAAAAHhX0w_ooKMijr6qdwv9_XtipZIR';
 //        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse");
 //        $responseKeys = json_decode($response, true);
        
 //        if (intval($responseKeys['success']) !== 1) {
 //            return redirect()->to('/home/login')->with('error', 'Please verify that you are not a robot!');
 //        }

 //        $model = new M_belajar();

 //        $email = $this->request->getPost('email');
 //        $password = md5($this->request->getPost('password'));
 //        $cek = $model->table('pengguna')
 //            ->where('email', $email)
 //            ->where('password', $password)
 //            ->get()
 //            ->getRow();

 //        if ($cek) {
 //            session()->set('id', $cek->id_user);
 //            session()->set('user', $cek->nama);
 //            session()->set('level', $cek->level);
 //            session()->set('email', $cek->email);
 //            session()->set('no_hp', $cek->no_hp);
 //            session()->set('alamat', $cek->alamat);

 //            $cek = session()->get('id');
 //            $model->log_activity($cek, "Logged in");

 //            $level = session()->get('level');
 //        if ($level == 2) {
 //            return redirect()->to('Dashboard');
 //        } else if (in_array($level, [1, 3, 10])) {
 //            return redirect()->to('Dashboard');
 //        }
 //    } else {
 //        return redirect()->to('Login')->with('error', 'Email or password is incorrect!');
 //        }
 //    }

public function login()
{
    $angka1 = rand(1, 10);
    $angka2 = rand(1, 10);
    session()->set('captcha_jawaban', $angka1 + $angka2);

    echo view('loginn', ['angka1' => $angka1, 'angka2' => $angka2]);
}

    public function aksi_login()
{
    // Tambahan untuk deteksi captcha
    $isOnline = $this->request->getPost('is_online');

    if ($isOnline == '1') {
        // Jika online, pakai Google reCAPTCHA
        $recaptchaResponse = $this->request->getPost('g-recaptcha-response');

        $secretKey = '6LeHXukqAAAAAHhX0w_ooKMijr6qdwv9_XtipZIR';
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse");
        $responseKeys = json_decode($response, true);

        if (intval($responseKeys['success']) !== 1) {
            return redirect()->to('/home/login')->with('error', 'Please verify that you are not a robot!');
        }
    } else {
        // Jika offline, pakai captcha manual (penjumlahan)
        $jawaban = (int)$this->request->getPost('captcha_jawaban');
        $jawabanBenar = session()->get('captcha_jawaban');

        if ($jawaban !== $jawabanBenar) {
            return redirect()->to('Login')->with('error', 'Jawaban captcha salah!');
        }
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
            return redirect()->to('Dashboard');
        } else if (in_array($level, [1, 3, 10])) {
            return redirect()->to('Dashboard');
        }
    } else {
        return redirect()->to('Login')->with('error', 'Email or password is incorrect!');
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
        return redirect()->to('Login');
    }

    public function register()
    {
        echo view('header', $this->data);
        echo view('register');
        echo view('footer');
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
        return redirect()->to('Login')->with('success', 'Registrasi berhasil! Silakan login.');
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

                return redirect()->to('Forgot-Password');
            } else {

                session()->setFlashdata('message', 'No user found with this email.');
                return redirect()->to('Forgot-Password');
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
            return redirect()->to('Forgot-Password');
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
                return redirect()->to('Forgot-Password');
            }
        } else {

            session()->setFlashdata('message', 'Invalid token.');
            return redirect()->to('Forgot-Password');
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