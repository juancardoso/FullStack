<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use chillerlan\QRCode\{QRCode, QROptions};

class Pagamento extends BaseController
{
    public function index()
    {
        $url = 'https://facens.br/';
        $qrcode = (new QRCode)->render($url);

        $data['qrCode'] = $qrcode;
        return view('PagamentoView', $data);
    }
}
