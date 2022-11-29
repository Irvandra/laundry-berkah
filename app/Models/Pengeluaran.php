<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengeluaran extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pengeluaran';
    protected $primaryKey       = 'id_pengeluaran';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['tanggal_pengeluaran', 'jumlah_pengeluaran','ket_pengeluaran', 'employee_id'];

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

    public function get_pengeluaran($id = null)
    {
        if($id == null) {
            $query = $this->db->table('pengeluaran')
            ->join('users', 'pengeluaran.employee_id=users.id')
            ->get()->getResultObject();
        } else {
            $query = $this->db->table('pengeluaran')
            ->join('users', 'pengeluaran.employee_id=users.id')
            ->where('id_pengeluaran', $id)
            ->get()->getResultObject();
        }

        return $query;
    }

    public function count_pengeluaran()
    {
        return $this->db->query('SELECT COUNT(*) as count_pengeluaran FROM pengeluaran')
            ->getRow();
    }

    public function sum_pengeluaran()
    {
        return $this->db->query('SELECT SUM(jumlah_pengeluaran) as sum_pengeluaran FROM pengeluaran')
            ->getRow();
    }
}
