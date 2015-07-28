<?php namespace App\Services;


use Illuminate\Support\Facades\Session;


/**
 * 
 * 
 * Here we setup for Flash messages and form alert in laravel
 * 
 * @author Plumptre Ademola <dplumptre@yahoo.com>
 * 
 * As you can see I am using static functions so you dont have to instanciate just 
 * straight up, check out read me to know how to you display this on the client side
 * 
 * 
 * 
 * 
 */


class FlashClass {
    
    
/*

This function set() uses two parameters
the name of the css class or id 
the second is the message you want to pass along
note i am using bootstrap 3 

*/    
public static function  set($css,$message){
    
    Session::flash('message', $message.'!'); 
    Session::flash('alert-class', $css); 
    
}
    
    
 
 
 
/*

this function displays the error 



*/ 
 
public static function get(){

if(Session::has('message')){
echo"<div class=\"alert ".Session::get('alert-class')."\">
 <button type='button' class='close' data-dismiss='alert'>&times;</button>  
<strong>The following errors have occurred:</strong>   
<div>".Session::get('message')." </div>
</div>";
}
    
}
  




/*

This functions displays errors

for the form you are working on 

normally you will have to ususally write 
something like this below

foreach( $errors->all() as $message ){
echo"<div>".$message."</div>";
}
echo"</div>";
 } 
 
 but you wont have to worry about that any more 
 
 because its all here, check readme






*/


public static function getFormNotice($errors){

 if( $errors->count() > 0 ){
echo"<div class='alert alert-danger'>
<button type='button' class='close' data-dismiss='alert'>&times;</button>  
<strong>The following errors have occurred:</strong>";

foreach( $errors->all() as $message ){
echo"<div>".$message."</div>";
}
echo"</div>";
 } 
    
}












}












