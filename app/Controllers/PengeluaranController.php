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
        $pengeluaran = $this->pengeluaranModel->get_pengeluaran();

        $data = [
            'title' => 'Pengeluaran',
            'pengeluaran' => $pengeluaran
        ];

        return view('pengeluaran/list', $data);
    }

    public function create()
    {
        $users = $this->usersModel->findAll();

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
            'employee_id' => 'required',
        ])) {
            return redirect()->to('/create_pengeluaran');
        }

        $this->pengeluaranModel = new Pengeluaran();

        $data = [
            'tanggal_pengeluaran' => $this->request->getPost('tanggal_pengeluaran'),
            'jumlah_pengeluaran' => $this->request->getPost('jumlah_pengeluaran'),
            'ket_pengeluaran' => $this->request->getPost('ket_pengeluaran'),
            'bukti_pengeluaran' => $this->request->getPost('bukti_pengeluaran'),
            'employee_id' => $this->request->getPost('employee_id'),
        ];
        $this->pengeluaranModel->save($data);

        return redirect()->to('/pengeluaran');
    }

    public function edit($id)
    {
        $pengeluaran = $this->pengeluaranModel->get_pengeluaran($id);

        $data = [
            'title' => 'Edit Pengeluaran',
            'pengeluaran' => $pengeluaran,
        ];

        return view('pengeluaran/edit', $data);
    }

    public function update($id)
    {
        if(!$this->validate([
            'tanggal_pengeluaran' => 'required',
            'jumlah_pengeluaran' => 'required|string',
            
        ])) {
            return redirect()->to('/edit_pengeluaran/'.$id);
        }

        $data = [
            'tanggal_pengeluaran' => $this->request->getVar('tanggal_pengeluaran'),
            'jumlah_pengeluaran' => $this->request->getVar('jumlah_pengeluaran'),
            'ket_pengeluaran' => $this->request->getVar('ket_pengeluaran'),
            'bukti_pengeluaran' => $this->request->getVar('bukti_pengeluaran'),
        ];
        $this->pengeluaranModel->update($id, $data);

        return redirect()->to('/pengeluaran');
    }

    public function delete($id)
    {
        $pengeluaranModel = new Pengeluaran();
        $pengeluaranModel->delete($id);
        return redirect()->to('/pengeluaran');
    }
}
