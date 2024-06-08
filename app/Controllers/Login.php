<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserDataModel;

class Login extends BaseController
{
    public function index(): string
    {
        return view('LoginView');
    }

    public function Logar() {

        $model = new UserDataModel();
        $email = $this->request->getPostGet('email');
        $password = $this->request->getPostGet('password');

        if($model->login($email, $password)) {
            return redirect()->route("Home"); 
        } else {
            echo '
            <script>
                alert("Usuário ou senha incorretos!"); 
                window.location.href = "index.php";
            </script>';
        }
    }

    public function Cadastrar() {

    }
}
