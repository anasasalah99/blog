<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{

public function showAdminName()
{

    return 'ahmad emam';

}
    public function getIndex(){

   // $data['name'] = 'ahmad emam';
    //$data['id'] = 5;
        $data = [];
$data=['name' => 'emad','age'=>15 ,'id' => 40];
    $obj = new \stdClass();
    $obj-> name = 'sara';
    $obj -> age = 25;
    $obj -> id   = 13;
$data1 =  [];
    return view('front.user',compact('obj'));
    }




}
