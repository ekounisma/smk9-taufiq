<?php

namespace App\Controllers;

use App\Models\Mhs_model;

class Mahasiswa1 extends BaseController
{
    public function index()
    {
        $mhs = new Mhs_Model();
        $datamhs = $mhs->findAll();
        $data = [
            'mhs' => $datamhs,
            'isiconten' => 'profil'
        ];
        return view('template',$data);
    }

    public function update()
    {
        $mhs = new Mhs_Model();
        $datamhs = $mhs->findAll();
        $data = [
            'mhs' => $datamhs,
            'isiconten' => 'update'
        ];
        return view('template',$data);
    }
}