<?php

namespace App\Controllers;
use App\Models\LatihanModel;

class Latihan extends BaseController
{
    protected $Mhs;

    public function __construct()
    {
        // $this->Mhs = new LatihanModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Latihan CI4',
            'pesan' => 'Teknik Informatika UMMI',
            //variabel tampungan => pemanggilan function dari modelnya
            'mhsData' => $this->Mhs->mhsData()
        ];

        return view('latihan_1', $data);
    }

    public function cv()
    {
        $data = [
            'title' => 'CV',
        ];
        return view('body',$data);
    }
}