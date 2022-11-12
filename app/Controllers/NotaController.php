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
        $nota = $this->notaModel->get_nota_list();

        $data = [
            'title' => 'Nota',
            'nota' => $nota,
        ];

        // return var_dump($data);
        return view('nota/list', $data);
    }

    public function create()
    {
        $users = $this->usersModel->findAll();

        $data = [
            'title' => 'Create Nota',
            // 'users' => $users
        ];

        return view('nota/create', $data);
    }

    public function store()
    {
        if (!$this->validate([
            'nama_pelanggan' => 'required',
            'jenis_pemasukan' => 'required|string',
            // 'cashier_id' => 'required',
        ])) {
            return redirect()->to('/nota');
        }

        $total_tagihan = 'berat_orderan' * 3500;

        $data = [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'jenis_pemasukan' => $this->request->getPost('jenis_pemasukan'),
            'berat_orderan' => $this->request->getPost('berat_orderan'),
            'total_tagihan' => $total_tagihan,
            'delivery' => $this->request->getPost('delivery'),

            // 'cashier_id' => $this->request->getPost('cashier_id'),
        ];
        $this->notaModel->save($data);

        return redirect()->to('/nota');
    }

    public function edit($id)
    {
        $nota = $this->notaModel->find($id);
        // $pemasukan = $this->pemasukanModel->get_pemasukan_edit($id);
        // $users = $this->usersModel->findAll();

        $data = [
            'title' => 'Edit Nota',
            'nota' => $nota,
            // 'users' => $users
        ];

        // return var_dump($data);
        return view('nota/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama_pelanggan' => 'required',
            'jenis_pemasukan' => 'required|string',
        ])) {
            return redirect()->to('/edit_nota/'. $id);
        }

        $data = [
            'tanggal_pemasukan' => $this->request->getVar('tanggal_pemasukan'),
            'jumlah_pemasukan' => $this->request->getVar('jumlah_pemasukan'),
        ];
        $this->pemasukanModel->update($id, $data);

        return redirect()->to('/pemasukan');
    }



    public function delete($id)
    {
        $this->notaModel->delete($id);
        return redirect()->to('/nota');
    }
}
