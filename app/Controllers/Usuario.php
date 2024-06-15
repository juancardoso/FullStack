<?php

namespace App\Controllers;
use App\Models\UserDataModel;

class Usuario extends BaseController
{    
    public function index(): string
    {
        return view('ListaUsuariosView');
    }

    public function listarUsuarios() {
        $model = new UserDataModel();
        $usuarios = $model->listarTodosUsuarios();

        // Passa os dados dos usuários para a view
        return view('ListaUsuariosView', ['usuarios' => $usuarios]);
    }
}
