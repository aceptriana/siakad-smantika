<?php

namespace App\Models;

use CodeIgniter\Model;

class StafTataUsahaModel extends Model
{
    protected $table = 'staftatausaha';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'jabatan', 'alamat'];
}
