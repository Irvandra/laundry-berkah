<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pengeluaran;
use App\Models\Users;

class PengeluaranController extends BaseController
{
    public function index()
    {
        $pengeluaranModel = new Pengeluaran();
        $pengeluaran = $pengeluaranModel->findAll();

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
        $pengeluaranModel = new Pengeluaran();
        $data = [
            'tanggal_pengeluaran' => $this->request->getPost('tanggal_pengeluaran'),
            'jumlah_pengeluaran' => $this->request->getPost('jumlah_pengeluaran'),
        ];
        $pengeluaranModel->save($data);

        return redirect()->to('/pengeluaran');
    }

    public function edit($id)
    {
        $pengeluaranModel = new Pengeluaran();
        $pengeluaran = $pengeluaranModel->find($id);

        $data = [
            'title' => 'Edit Pengeluaran',
            // 'pemasukan' => $pemasukan
        ];

        return view('pengeluaran/edit', $pengeluaran);
    }

    public function update($id)
    {
        if(!$this->validate([
            'tanggal_pengeluaran' => 'required',
            'jumlah_pengeluaran' => 'required|string',
        ])) {
            return redirect()->to('/edit_pengeluaran/'.$id);
        }
        $pengeluaranModel = new Pengeluaran();
        $data = [
            'tanggal_pengeluaran' => $this->request->getVar('tanggal_pengeluaran'),
            'jumlah_pengeluaran' => $this->request->getVar('jumlah_pengeluaran'),
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
