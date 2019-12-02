<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about', ['nama' => 'Mahdy']);
    }

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
