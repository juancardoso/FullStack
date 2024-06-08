<?php

namespace App\Controllers;

class Pagamento extends BaseController
{
    public function index(): string
    {

        $url = 'https://facens.br/';
        $qrcode = (new QRCode)->render($data);

        echo "<img src='$qrcode' width='200' height='200' >";
        
        die();
        return view('PagamentoView');
    }
}
