<?php

namespace App\Models;

use CodeIgniter\Model;

class LogActivityModel extends Model
{
    protected $table = 'log_activity';
    protected $primaryKey = 'id_log';
    protected $allowedFields = ['id_user', 'what_happens', 'created_at'];

    public function logActivity($id_user, $what_happens)
    {
        return $this->insert([
            'id_user' => $id_user,
            'what_happens' => $what_happens,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function getLogs($search = null, $perPage = 10)
    {
        $this->select('log_activity.*, pengguna.nama as user_name')
            ->join('pengguna', 'pengguna.id_user = log_activity.id_user', 'left')
            ->orderBy('log_activity.created_at', 'DESC');

        if ($search) {
            $this->groupStart()
                ->like('pengguna.nama', $search)
                ->orLike('log_activity.what_happens', $search)
                ->groupEnd();
        }

        $logs = $this->paginate($perPage);

        foreach ($logs as &$log) {
            $log['what_happens'] = $this->replaceUserIdWithName($log['what_happens']);
        }

        return $logs;
    }

    private function replaceUserIdWithName($logText)
    {
        if (preg_match('/User ID (\d+)/', $logText, $matches)) {
            $userId = $matches[1];

            $db = \Config\Database::connect();
            $query = $db->table('pengguna')->select('nama')->where('id_user', $userId)->get();

            if ($query->getNumRows() > 0) {
                $user = $query->getRow();
                $logText = str_replace("User ID $userId", "User " . esc($user->nama), $logText);
            }
        }

        return $logText;
    }
}
