<?php

namespace App\Controllers;

use App\Models\ReservationModel;
use App\Models\PaymentModel;
use App\Models\M_belajar;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\LogActivityModel;
use TCPDF;
use Dompdf\Dompdf;

class CRUDController extends BaseController
{
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