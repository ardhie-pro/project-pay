<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Admintenda extends Model
{
    protected $table            = 'Admintenda';
    protected $primaryKey       = 'user_id';
    protected $allowedFields    = ['nama_user', 'adminwemart', 'pass_user', 'saldo'];

    // Dates
    protected $useTimestamps = false;
}
