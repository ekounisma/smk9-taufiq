<?php

namespace App\Models;

use CodeIgniter\Model;

class Mhs_Model extends Model
{
    protected $table = 'mahasiswa';
    protected $primarykey = 'id';
    protected $allowedFields = ['nim','nama','telepon'];
}