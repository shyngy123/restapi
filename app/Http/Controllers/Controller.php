<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\paremeters;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;



    public function showProduct(){
        
        
        
       
         return view('test');
    }

}
