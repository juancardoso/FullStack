<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserDataModel;

class Cadastro extends BaseController
{
    public function index(): string
    {
        return view('CadastroView');
    }

    public function cadastrar() {
        $model = new UserDataModel();
        $nome = $this->request->getPostGet('nome');
        $email = $this->request->getPostGet('email');
        $password = $this->request->getPostGet('senha');

        $model->cadastrar($nome, $email, $password);
        return redirect()->route("/"); 
    }
}
