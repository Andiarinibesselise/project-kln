<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct(){
    }
    public function admin(){
        return view('backend.index');
    }
    public function setups(){
        $data = DB::table('setups')->first();
        return view ('backend.setup',['data'=>$data]);
    }
    public function registrasi(){
        return view ('Registration.multiform');
    }
}

