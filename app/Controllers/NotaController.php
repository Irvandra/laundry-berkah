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
            // 'cashier_id' => 'required',
        ])) {
            return redirect()->to('/create_nota');
        }
        $berat_orderan = $this->request->getPost('berat_orderan');
        $total_tagihan = ($berat_orderan * 3500);

        $data = [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'berat_orderan' => $berat_orderan,
            'jumlah_pemasukan' => $total_tagihan,
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
            // 'jenis_pemasukan' => 'required|string',
        ])) {
            return redirect()->to('/edit_nota/'. $id);
        }

        $data = [
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'berat_orderan' => $this->request->getVar('berat_orderan'),
            // 'total_tagihan' => $this->request->getVar('total_tagihan'),
            'delivery' => $this->request->getVar('delivery'),
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
