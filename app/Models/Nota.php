<?php

namespace App\Models;

use CodeIgniter\Model;

class Nota extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'nota';
    protected $primaryKey       = 'id_orderan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['status_order','delivery','jumlah_pemasukan','berat_orderan','tanggal_nota','nama_pelanggan','id_orderan'];

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

    public function get_nota_list()
    {
        return $this->db->table('nota')
            // ->join('users', 'nota.cashier_id=users.id')
            ->get()->getResultObject();
    }

    public function get_nota_edit($id)
    {
        return $this->db->table('nota')
            // ->join('users', 'nota.cashier_id=users.id')
            ->get()->getResult();
    }
}
