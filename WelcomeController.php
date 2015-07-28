<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Services\FlashClass as FlashClass;



class WelcomeController extends Controller
{

    
    
    
    public function index()
    {
        
        return view('welcome.index');
    }
    
     public function signup()
    {     
        return view('welcome.sign-up');
    }
   
    
     public function postsignup(Requests\SignupRequest $request)
    {         

             
        FlashClass::set('alert-danger','UTME requires ( 4 )courses with English inclusive'); 
          
           return redirect('sign-up');
             
         }
        
    }    

    


    
    

}
