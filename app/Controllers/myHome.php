<?php

namespace App\Controllers;

class myHome extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('porto/home', $data);
    }
}
