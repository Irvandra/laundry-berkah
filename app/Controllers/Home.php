<?php

namespace App\Controllers;

use App\Models\Nota;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;

class Home extends BaseController
{
    protected $notaModel;
    protected $pemasukanModel;
    protected $pengeluaranModel;
    
    public function __construct()
    {
        $this->notaModel = new Nota();
        $this->pemasukanModel = new Pemasukan();
        $this->pengeluaranModel = new Pengeluaran();
    }

    public function index()
    {
        $nota = $this->notaModel->count_order();
        $pemasukan = $this->pemasukanModel->count_pemasukan();
        $pengeluaran = $this->pengeluaranModel->count_pengeluaran();
        $saldo = $this->pemasukanModel->sum_pemasukan()->sum_pemasukan - $this->pengeluaranModel->sum_pengeluaran()->sum_pengeluaran;

        $data = [
            'title' => 'Dasboard',
            'nota' => $nota,
            'pemasukan' => $pemasukan,
            'pengeluaran' => $pengeluaran,
            'saldo' => $saldo,
        ];

        return view('dashboard', $data);
    }
}
