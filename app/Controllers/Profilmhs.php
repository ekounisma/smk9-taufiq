<?php

namespace App\Controllers;

class Profilmhs extends BaseController
{
    public function index()
    {
        
        $data = [
            'isiconten' => 'profile'
        ];
        return view('template',$data);
    }

    public function update()
    {
        
        $data = [
            'mhs' => $datamhs,
            'isiconten' => 'profile'
        ];
        return view('template',$data);
    }
}