<?php

namespace App\Models;

use CodeIgniter\Model;

class M_transfer extends Model
{
    protected $table            = 'transfer';
    protected $primaryKey       = 'pemabayaran_id';
    protected $allowedFields    = ['nama_siswa', 'nis_siswa', 'pin', 'saldo',];

    // Dates
    protected $useTimestamps = false;
}
