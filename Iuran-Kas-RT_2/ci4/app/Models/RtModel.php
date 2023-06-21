<?php

namespace App\Models;

use CodeIgniter\Model;

class RtModel extends Model
{
    protected $table = 'warga';
    protected $primaryKey = 'warga_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nik', 'nama', 'kelamin', 'alamat', 'no_rumah', 'status'];
}