<?php

namespace App\Controllers;

class Mahasiswa3 extends BaseController
{
    public function index()
    {
        
        $data = [
            'isiconten' => 'modaldosen'
        ];
        return view('template',$data);
    }

    public function update()
    {
        
        $data = [
            'mhs' => $datamhs,
            'isiconten' => 'update'
        ];
        return view('template',$data);
    }
}