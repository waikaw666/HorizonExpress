<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register_seat(){

        $id = request('id');

        return view('register.register_seat',['id'=>$id]);
    }

    public  function register_info(){
        return view('register.register_info');
    }
}
