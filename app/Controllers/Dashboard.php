<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = ['isiconten' => '/dash/content'];
        return view('template',$data);
    }
}