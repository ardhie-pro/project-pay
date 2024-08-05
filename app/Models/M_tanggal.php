<?php

namespace App\Models;

use CodeIgniter\Model;

class M_tanggal extends Model
{
    protected $table            = 'tanggal';
    protected $primaryKey       = 'tanggal_id';
    protected $allowedFields    = ['tanggal_id', 'tanggal'];

    // Dates
    protected $useTimestamps = false;
}
