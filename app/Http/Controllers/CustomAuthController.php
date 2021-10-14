<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{     
     public $lock;
     
    public function changeLock($lo){
           $this->lock = sha1($lo);
    }
    
    public function  adult (){
        return view('customAuth.index');
        $this->lock  = "mostafa_123";
        $this->changeLock('123');
     }
     

     
}


