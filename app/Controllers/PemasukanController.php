<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pemasukan;
use App\Models\Users;

class PemasukanController extends BaseController
{
    protected $pemasukanModel;
    protected $usersModel;

    public function __construct()
    {
        $this->pemasukanModel = new Pemasukan();
        $this->usersModel = new Users();
    }

    public function index()
    {
        $pemasukan = $this->pemasukanModel->get_pemasukan();

        $data = [
            'title' => 'Pemasukan',
            'pemasukan' => $pemasukan,
        ];

        return view('pemasukan/list', $data);
    }

    public function create()
    {
        $users = $this->usersModel->findAll();

        $data = [
            'title' => 'Create Pemasukan',
            'users' => $users
        ];

        return view('pemasukan/create', $data);
    }

    public function store()
    {
        if(!$this->validate([
            'tanggal_pemasukan' => 'required',
            'jumlah_pemasukan' => 'required|string',
            'employee_id' => 'required',
        ])) {
            return redirect()->to('/create_pemasukan');
        }

        $this->pemasukanModel = new pemasukan();

        $sql = "SELECT SUM(jumlah_pemasukan) as saldo FROM pemasukan";
        $sum = db_connect()->query($sql)->getRow();

        $data = [
            'tanggal_pemasukan' => $this->request->getPost('tanggal_pemasukan'),
            'jumlah_pemasukan' => $this->request->getPost('jumlah_pemasukan'),
            'saldo' => $sum->saldo + $this->request->getPost('jumlah_pemasukan'),
            'ket_pemasukan' => $this->request->getPost('ket_pemasukan'),
            'employee_id' => $this->request->getPost('employee_id'),
        ];
        $this->pemasukanModel->save($data);

        return redirect()->to('/pemasukan');
    }

    public function edit($id)
    {
        $pemasukan = $this->pemasukanModel->get_pemasukan($id);

        $data = [
            'title' => 'Edit Pemasukan',
            'pemasukan' => $pemasukan,
        ];

        return view('pemasukan/edit', $data);
    }

    public function update($id)
    {
        if(!$this->validate([
            'tanggal_pemasukan' => 'required',
            'jumlah_pemasukan' => 'required|string',
        ])) {
            return redirect()->to('/edit_pemasukan/'.$id);
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
        $this->pemasukanModel->delete($id);
        return redirect()->to('/pemasukan');
    }
}
