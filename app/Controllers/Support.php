<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserDataModel;

class Support extends BaseController
{
    public function index()
    {
        $model = new UserDataModel();
        $user = session()->get("user_id");
        $tickets = $model->getMyTickets($user);

        return view('SupportView', ['tickets' => $tickets]);
    }

    public function cadastrarTicket() {
        $model = new UserDataModel();
        $user = session()->get("user_id");
        $titulo = $this->request->getPostGet('titulo');
        $descricao = $this->request->getPostGet('descricao');

        
        if($model->insertNewTicket($user, $titulo, $descricao) == 0) {
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
