<?php

namespace App\Controllers;
use App\Models\UserDataModel;

class AulasMaisAssistidas extends BaseController
{    

    
    public function index(): string
    {
        return view('AulasMaisAssistidasView');
    }
    
    
    public function buscar(): string
    {
        $model = new UserDataModel();
        print_r(json_encode($model->aulasMaisAssistidas()));
        die();
    }
}
