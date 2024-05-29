<?php

namespace App\Controllers;
use App\Models\Companies;
use App\Models\School;

class Home extends BaseController
{
    public function index(): string
    {
        $Companiess = new Companies();
        $Schools = new School();
        $data1 = $Schools->getProjects();
        $data2 = $Companiess->getProjects();
        return view('index', compact('data1', 'data2'));
    }
    public function puasa()
    {
        $data = [
            'title' => 'Ramadhan 1445H',
            'pesan' => 'Ramadhan Kareem'
        ];

        return view('ramadhan', $data);
    }
}
