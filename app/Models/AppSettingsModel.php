<?php

namespace App\Models;

use CodeIgniter\Model;

class AppSettingsModel extends Model
{
    protected $table = 'app_settings'; // Nama tabel yang akan digunakan
    protected $primaryKey = 'id'; // Primary key tabel
    protected $allowedFields = ['app_name', 'app_logo']; // Field yang dapat diisi
}
