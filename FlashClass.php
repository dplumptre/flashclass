<?php namespace App\Services;


use Illuminate\Support\Facades\Session;


/**
 * 
 * 
 * Here we setup for Flash messages and form alert in laravel
 * 
 * @author Plumptre Ademola <dplumptre@yahoo.com>
 * 
 * 
 * 
 * 
 */


class FlashClass {
    
    
  
    
public static function  set($css,$message){
    
    Session::flash('message', $message.'!'); 
    Session::flash('alert-class', $css); 
    
}
    
    
 
public static function get(){

if(Session::has('message')){
echo"<div class=\"alert ".Session::get('alert-class')."\">
 <button type='button' class='close' data-dismiss='alert'>&times;</button>  
<strong>The following errors have occurred:</strong>   
<div>".Session::get('message')." </div>
</div>";
}
    
}
  

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












