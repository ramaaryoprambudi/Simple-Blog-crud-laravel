<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index (){
        echo "Hello Controller";
    } 

    function test (){
        echo "Controller test";
    }
}
