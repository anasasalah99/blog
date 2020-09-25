<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('showSecondUser2');
    }

    public function showSecondUser(){
        return ' second User 1';

    }

    public function showSecondUser2(){
        return ' second User 2';

    }

    public function showSecondUser3(){
        return ' second User 3 ';

    }


}
