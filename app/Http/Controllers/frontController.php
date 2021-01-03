<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class frontController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $setups =DB ::table('setups')->first();
        return view('frontend.index',[ 'setups' =>$setups, ]);
    }
}
