<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function showUserInfo()
    {
        return view('userinfo');
    }
}
