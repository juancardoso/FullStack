<?php

namespace App\Controllers;
use App\Models\UserDataModel;

class AulasMaisAssistidas extends BaseController
{    

    
    public function index(): string
    {
        $model = new UserDataModel();
        $data['aulas'] = $model->aulasMaisAssistidas();
        
        return view('AulasMaisAssistidasView', $data);
    }

}
