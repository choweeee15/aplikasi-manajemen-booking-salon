<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\M_belajar;
use App\Models\AppSettingsModel;

class BaseController extends Controller
{
    protected $data = [];
    protected $session;
    

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $settingsModel = new AppSettingsModel();
        $settings = $settingsModel->first();
        $this->data['app_name'] = $settings['app_name'] ?? 'E-Parkir';
    $this->data['app_logo'] = isset($settings['app_logo']) && $settings['app_logo'] != '' 
        ? base_url('uploads/' . $settings['app_logo']) 
        : base_url('assets\img\logo-icon.png');
        if ($this->session->get('level') > 0) {
            $Sim = new \App\Models\M_belajar();

            if ($this->session->get('level') == "2") {
                $where = ['karyawan.id_user' => $this->session->get('id')];
                $chelsica = $Sim->joinw('user', 'karyawan', 'user.id_user=karyawan.id_user', $where);
                $this->data['name'] = $chelsica->nama_karyawan ?? $chelsica->username ?? 'Unknown';
                $this->data['foto'] = $chelsica->foto ?? 'default.jpg';
            } elseif ($this->session->get('level') == "3") {
                $where = ['pelanggan.id_user' => $this->session->get('id')];
                $chelsica = $Sim->joinw('user', 'pelanggan', 'user.id_user=pelanggan.id_user', $where);
                $this->data['name'] = $chelsica->nama_pelanggan ?? $chelsica->username ?? 'Unknown';
                $this->data['foto'] = $chelsica->foto ?? 'default.jpg';
            } else {
                $where = ['id_user' => $this->session->get('id')];
                $chelsica = $Sim->getWhere('user', $where);
                $this->data['name'] = $chelsica->username ?? 'Unknown';
                $this->data['foto'] = $chelsica->foto ?? 'default.jpg';
            }
        } else {
            $this->data['name'] = 'Guest';
        }
    }


    /**
     * Instance of the main Request object.
     *
     * @var RequestInterface
     */
    protected $request;

    /**
     * Constructor.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param LoggerInterface   $logger
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        // Ensure 'name' is available in all views
        $this->data['header'] = view('header', $this->data);
    }
}
