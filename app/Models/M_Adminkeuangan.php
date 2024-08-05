<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Adminkeuangan extends Model
{
    protected $table            = 'adminkeuangan';
    protected $primaryKey       = 'adminkeungan_id';
    protected $allowedFields    = ['nama', 'user', 'pass'];

    // Dates
    protected $useTimestamps = false;
}
