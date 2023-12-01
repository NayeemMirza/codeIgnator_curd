<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        $data = []; 
        $data['main_content'] = 'home'; 
        return view('innerpages/template', $data);
    }
}
