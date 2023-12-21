<?php

namespace App\Models;

use CodeIgniter\Model;

class BackendModel extends Model
{
    protected $table      = 'tb_data';
    protected $allowedFields = ['nama_file', 'tahun','berkas'];
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

   
    public function hitungJumlahData()
    {
        return $this->db->table('tb_data')->countAll();
    }
}
