<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Nota;

class NotaController extends BaseController
{
    public function __construct()
    {
        $this->notaModel = new Nota();
        // $this->usersModel = new Users();
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
}
