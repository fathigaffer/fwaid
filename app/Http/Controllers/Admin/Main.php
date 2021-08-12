<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Main extends Controller
{
    public function __construct(){
        $this->middleware('auth');//>excpet('showpage')

    }
    //
    public function  showpage(){

        return "fathi laravel test 2222";
    }
}
