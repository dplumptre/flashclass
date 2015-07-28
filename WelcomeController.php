<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Services\FlashClass as FlashClass;



class WelcomeController extends Controller
{

    
    
    
 
    
     public function signup()
    {     
        return view('welcome.sign-up');
    }
   
    
     public function postsignup(Requests\SignupRequest $request)
    {         

/*

this is how you add it to yoyr controller class below


*/
             
        FlashClass::set('alert-danger','there is an error'); 
          
           return redirect('sign-up');
             
         }
        
    }    

    


    
    

}
