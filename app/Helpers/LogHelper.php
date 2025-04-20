<?php

namespace App\Helpers;

use App\Models\LogAktivitasModel;

class LogHelper
{
    public static function catatAktivitas($aktivitas, $user, $tabel, $jenis_aksi)
    {
        $logModel = new LogAktivitasModel();

        $ipAddress = $_SERVER['REMOTE_ADDR'];

        // Save log data to the 'log_aktivitas' table
        $logModel->save([
            'nama_user'        => $user['nama'],
            'username'         => $user['username'],
            'aktivitas'        => $aktivitas,
            'ip_address'       => $ipAddress,
            'id_user'          => $user['id_user'], 
            'tabel_terpengaruh' => $tabel,
            'jenis_aksi'       => $jenis_aksi
        ]);
    }
}
