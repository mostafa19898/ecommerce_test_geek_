<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensController extends Controller
{
    public function index(){

        return view('mens.index');
    }
}
