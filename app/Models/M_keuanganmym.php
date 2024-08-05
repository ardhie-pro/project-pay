<?php

namespace App\Models;

use CodeIgniter\Model;

class M_keuanganmym extends Model
{
    protected $table            = 'keuanganmym';
    protected $primaryKey       = 'pemabayaran_id';
    protected $allowedFields    = ['nama_siswa', 'nis_siswa', 'pin', 'saldo',];

    // Dates
    protected $useTimestamps = false;
}
