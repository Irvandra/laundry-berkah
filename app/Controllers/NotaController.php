<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Nota;
use App\Models\Users;

class NotaController extends BaseController
{
    public function __construct()
    {
        $this->notaModel = new Nota();
        $this->usersModel = new Users();
    }

    public function index()
    {
        $nota = $this->notaModel->findAll();

        $data = [
            'title' => 'Nota',
            'nota' => $nota,
        ];

        return view('nota/list', $data);
    }

    public function create()
    {
        $users = $this->usersModel->findAll();

        $data = [
            'title' => 'Create Nota',
        ];

        return view('nota/create', $data);
    }

    public function store()
    {
        if (!$this->validate([
            'nama_pelanggan' => 'required',
            'berat_order' => 'required',
            'tanggal_order' => 'required',
        ])) {
            return redirect()->to('/create_nota');
        }
        
        $berat_order = $this->request->getPost('berat_order');
        $total_tagihan = ($berat_order * 3500);

        $data = [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'berat_order' => $berat_order,
            'total_tagihan' => $total_tagihan,
            'tanggal_order' => $this->request->getPost('tanggal_order'),
        ];
        $this->notaModel->save($data);

        return redirect()->to('/nota');
    }

    public function edit($id)
    {
        $nota = $this->notaModel->find($id);

        $data = [
            'title' => 'Edit Nota',
            'nota' => $nota,
        ];

        return view('nota/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama_pelanggan' => 'required',
            'berat_order' => 'required',
            'tanggal_order' => 'required',
        ])) {
            return redirect()->to('/edit_nota/'. $id);
        }
        
        $berat_order = $this->request->getVar('berat_order');
        $total_tagihan = ($berat_order * 3500);
        
        $data = [
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'berat_order' => $berat_order,
            'total_tagihan' => $total_tagihan,
            'tanggal_order' => $this->request->getVar('tanggal_order'),
        ];
        $this->notaModel->update($id, $data);

        return redirect()->to('/nota');
    }

    public function delete($id)
    {
        $this->notaModel->delete($id);
        return redirect()->to('/nota');
    }
}
