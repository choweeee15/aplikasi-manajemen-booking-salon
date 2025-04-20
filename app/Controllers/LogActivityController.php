<?php

namespace App\Controllers;

use App\Models\LogActivityModel;
use CodeIgniter\Controller;

class LogActivityController extends BaseController
{
    protected $logModel;

    public function __construct()
    {
        parent::__construct();
        $this->logModel = new LogActivityModel();
    }

    public function index()
    {
        $search = $this->request->getGet('search');
        $perPage = 10;

        $logs = $this->logModel->getLogs($search, $perPage);
        $pager = $this->logModel->pager;

        $data = [
            'logs' => $logs,
            'pager' => $pager,
            'search' => $search
        ];

        echo view('header.php', $data);
        echo view('menu.php');
        echo view('log_activity', $data);
        echo view('footer.php');
    }
}
