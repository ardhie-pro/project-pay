<?php

namespace App\Models;

use CodeIgniter\Model;

class M_tenda extends Model
{
    protected $table            = 'tenda';
    protected $primaryKey       = 'pemabayaran_id';
    protected $allowedFields    = ['nama_siswa', 'nis_siswa', 'tenda', 'pin', 'saldo',];

    // Dates
    protected $useTimestamps = false;
}
