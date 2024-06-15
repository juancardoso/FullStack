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

        $userid = $model->login($email, $password);
        if($userid > 0) {
            $this->setUserSession($userid);
            return redirect()->route("Home"); 
        } else {
            echo '
            <script>
                alert("Usuário ou senha incorretos!"); 
                window.location.href = "index.php";
            </script>';
        }
    }

    public function Deslogar() {
        $this->unsetUserSession();
        return redirect()->route("Login"); 
    }

    private function setUserSession($userid) {
		$data = [
			'user_id' => $userid,
			'isLoggedIn' => true
		];

		session()->set($data);
	}

    private function unsetUserSession() {
        session()->destroy();
    }
}
