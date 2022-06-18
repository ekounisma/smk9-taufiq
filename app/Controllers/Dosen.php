<?php

namespace App\Controllers;

class Dosen extends BaseController
{
    public function index()
    {
        
        $data = [
            'isiconten' => 'dosenn'
        ];
        return view('template',$data);
    }

    public function update()
    {
        
        $data = [
            'isiconten' => 'update'
        ];
        return view('template',$data);
    }
}