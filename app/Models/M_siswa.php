<?php

namespace App\Models;

use CodeIgniter\Model;

class M_siswa extends Model
{
    protected $table            = 'siswa';
    protected $primaryKey       = 'siswa_id';
    protected $allowedFields    = ['nama_siswa', 'nis_siswa', 'pass_siswa', 'pin', 'saldo', 'keterangan'];

    // Dates
    protected $useTimestamps = false;
}
