<?php

namespace App\Controllers;

class Mahasiswa2 extends BaseController
{
    public function index()
    {
        
        $data = [
            'mhs' => $datamhs,
            'isiconten' => 'Iplus'
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