<?php

namespace App\Models;

use CodeIgniter\Model;

class PelajaranModel extends Model
{
    protected $table = 'pelajaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama'];
}
