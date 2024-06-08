<?php

namespace App\Controllers;
use App\Models\UserDataModel;

class Aula extends BaseController
{    


    public function assistir(){
        $user = session()->get("user_id");
        $videoId = $this->request->getPostGet('videoId');

        $model = new UserDataModel();
        $model->assistir($videoId, $user);
    }    
    
    public function aulasAssistidas(): string
    {

        $user = session()->get('user_id');
        $model = new UserDataModel();
        print_r(json_encode($model->aulasAssistidas($user)));
        die();
    
    }
}
