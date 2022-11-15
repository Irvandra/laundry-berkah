<?php

namespace App\Models;

use CodeIgniter\Model;

class Pemasukan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pemasukan';
    protected $primaryKey       = 'id_pemasukan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['tanggal_pemasukan', 'jumlah_pemasukan', 'employee_id'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function get_pemasukan($id = null)
    {
        if($id == null) {
            $query = $this->db->table('pemasukan')
            ->join('users', 'pemasukan.employee_id=users.id')
            ->get()->getResultObject();
        } else {
            $query = $this->db->table('pemasukan')
            ->join('users', 'pemasukan.employee_id=users.id')
            ->where('id_pemasukan', $id)
            ->get()->getResultObject();
        }

        return $query;
    }
}
