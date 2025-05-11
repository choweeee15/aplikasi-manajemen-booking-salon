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

class DashboardController extends BaseController
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
