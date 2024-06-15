<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserDataModel;

class Support extends BaseController
{
    public function index(): string
    {
        return view('SupportView');
    }
}
