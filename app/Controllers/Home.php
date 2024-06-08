<?php

namespace App\Controllers;
use App\Models\UserDataModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('HomeView');
    }
} 
