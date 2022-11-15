<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pengeluaran;
use App\Models\Users;

class PengeluaranController extends BaseController
{
    protected $pengeluaranModel;
    protected $usersModel;

    public function __construct()
    {
        $this->pengeluaranModel = new Pengeluaran();
        $this->usersModel = new Users();
    }


    public function index()
    {
        $pengeluaran = $this->pengeluaranModel->findAll();

        $data = [
            'title' => 'Pengeluaran',
            'pengeluaran' => $pengeluaran
        ];

        return view('pengeluaran/list', $data);
    }

    public function create()
    {
        $usersModel = new Users();
        $users = $usersModel->findAll();

        $data = [
            'title' => 'Create Pengeluaran',
            'users' => $users,
        ];

        return view('pengeluaran/create', $data);
    }

    public function store()
    {
        if(!$this->validate([
            'tanggal_pengeluaran' => 'required',
            'jumlah_pengeluaran' => 'required|string',
        ])) {
            return redirect()->to('/create_pengeluaran');
        }

        // $saldo= 

        $data = [
            'tanggal_pengeluaran' => $this->request->getPost('tanggal_pengeluaran'),
            'jumlah_pengeluaran' => $this->request->getPost('jumlah_pengeluaran'),
            'saldo' => $this->request->getPost('saldo'),
            'bukti_pengeluaran' => $this->request->getPost('bukti_pengeluaran'),
            'ket_pengeluaran' => $this->request->getPost('ket_pengeluaran'),
            
        ];
        $this->pengeluaranModel->save($data);

        return redirect()->to('/pengeluaran');
    }

    public function edit($id)
    {
       
        $pengeluaran = $this->pengeluaranModel->find($id);

        $data = [
            // 'id_pengeluaran' => $id,
            'title' => 'Edit Pengeluaran',
            // 'tanggal_pengeluaran' => $this->request->getPost('tanggal_pengeluaran'),
            'pengeluaran' => $pengeluaran,
            // 'pemasukan' => $pemasukan
        ];

        return view('pengeluaran/edit', $data);
    }

    public function update($id)
    {
        if(!$this->validate([
            'tanggal_pengeluaran' => 'required',
            'jumlah_pengeluaran' => 'required|string',
            'saldo' => 'required',
            
        ])) {
            return redirect()->to('/edit_pengeluaran/'.$id);
        }
        $pengeluaranModel = new Pengeluaran();
        $data = [
            'tanggal_pengeluaran' => $this->request->getVar('tanggal_pengeluaran'),
            'jumlah_pengeluaran' => $this->request->getVar('jumlah_pengeluaran'),
            'saldo' => $this->request->getVar('saldo'),
            'bukti_pengeluaran' => $this->request->getVar('bukti_pengeluaran'),
            'ket_pengeluaran' => $this->request->getVar('ket_pengeluaran'),
        ];
        $pengeluaranModel->update($id, $data);

        return redirect()->to('/pengeluaran');
    }

    public function delete($id)
    {
        $pengeluaranModel = new Pengeluaran();
        $pengeluaranModel->delete($id);
        return redirect()->to('/pengeluaran');
    }
}
