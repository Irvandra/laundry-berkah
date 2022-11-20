<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Nota;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\Users;



class DashboardController extends BaseController
{
    
    protected $notaModel;
    protected $pemasukanModel;
    protected $pengeluaranModel;
    protected $usersModel;

    public function __construct()
    {
        $this->notaModel = new Nota();
        $this->pemasukanModel = new Pemasukan();
        $this->pengeluaranModel = new Pengeluaran();
        $this->usersModel = new Users();
    }
    public function index()
    {
        $nota = $this->notaModel->findAll();
        $pemasukan = $this->pemasukanModel->findAll();
        $pengeluaran = $this->pengeluaranModel->findAll();
        $users = $this->usersModel->findAll();
        

        $data = [
            'title' => 'Dashboard Laundry Berkah',
            'nota' => $nota,
            'pemasukan' => $pemasukan,
            'pengeluaran' => $pengeluaran,
            'users' => $users,
        ];

        return view('dashboard/dashboard', $data);
    }

    public function dashboard()
    {
       //
    }
}
