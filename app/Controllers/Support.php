<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserDataModel;

class Support extends BaseController
{
    public function index()
    {
        return view('SupportView');
    }

    public function cadastrarTicket() {
        $model = new UserDataModel();
        $user = session()->get("user_id");
        $descricao = $this->request->getPostGet('descricao');

        
        if($model->insertNewTicket($user, $descricao) == 0) {
            $homePage = base_url()."Home";
            echo "
            <script>
                alert('Ticket Cadastrado com sucesso!'); 
                window.location.href = '$homePage';
            </script>";
        } else {
            $supportPage = base_url()."Support";
            echo "
            <script>
                alert('Ticket não foi cadastrado, descrição máxima de 255 caracteres!'); 
                window.location.href = '$supportPage';
            </script>";
        }
    }
}
