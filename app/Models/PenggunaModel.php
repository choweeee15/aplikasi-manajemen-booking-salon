<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'pengguna'; // Name of the table
    protected $primaryKey = 'id_user'; // Primary key of the table

    // Fields that are allowed to be updated
    protected $allowedFields = ['nama', 'email', 'kendaraan', 'password', 'token', 'expiry', 'level'];

    /**
     * Find user by email
     */
    public function findUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    /**
     * Find user by reset token
     */
    public function findUserByToken($token)
    {
        return $this->where('token', $token)->first();
    }

    /**
     * Update reset token and expiry time for a user
     */
    public function updateResetToken($id_user, $token, $expiryTime)
    {
        $this->update($id_user, [
            'token' => $token,
            'expiry' => $expiryTime
        ]);
    }

    /**
     * Update user password
     */
    public function updatePassword($id_user, $newPassword)
    {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT); // Hashing the password
        $this->update($id_user, ['password' => $hashedPassword, 'token' => null, 'expiry' => null]); // Clear the token and expiry
    }
}
