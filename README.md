# flashclass

how you can add flash to your laravel application easy


The main idea for this class is to make it easy for you to send flash message without writing too much of 

code,especially if you are working on an application that reqires using flash messages and forms, you are all free to 

improve on the code or fork this repo.

One thing you must note though , it uses bootstrap 3 css but then you can adjust to make it work for you

1. You can add the FlashClass.php in a services folders in the App folder once that is done you can hook it up in your
 in your controller , look at the welcome controller i did

2. For the view  part , above the for or where you want the error to show you will have something like this below


<?php

/*
include the name space of the flashclass
*/

use App\Services\FlashClass as FlashClass;


/*
Above your  form  you can paste this two line of code

FlashClass::getFormNotice($errors); this takes care of 

foreach( $errors->all() as $message ){
echo"<div>".$message."</div>";
}
echo"</div>";
 } 
 
 you might be used to writing  which seems easier just writing a one line code
 
 
 This FlashClass::get();  gets the flash message out for 
 
 
 
 

*/


FlashClass::getFormNotice($errors);
FlashClass::get();

?>






  
