<?php 
  if(isset($_POST['submit-contact'])){ 
   $name=$_POST['name'];  
   $email=$_POST['email']; 
   $phone=$_POST['phone'];
   $message=$_POST['message'];  
    $to      =  'bitialakashindi@gmail.com';
    $subject =  'Contact us form filled by user on kazimia.com/';
    $message =  'Message from : '."\r\n".
                'Name :  '.$name."\r\n". 
                'Email :  '.$email."\r\n". 
                'Phone :  '.$phone."\r\n".
                'Message : '.$message;
    $headers =  'From: webmaster@example.com'       . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

   if(mail($to, $subject, $message, $headers)){ 
         //Start the session if already not started.
    
    echo "<script>  
        alert('We’ve received your message, and one of our sales representatives will be in touch with you shortly');
        window.location.href='contact.html';
          </script>"; 
      }
   else{
       echo "SMTP error";
      }
   }
 

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

/*
Tested working with PHP5.4 and above (including PHP 7 )

 */

/*
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['name','email','phone'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);




$pp->sendEmailTo('kakasasasasa600@gmail.com'); 

echo $pp->process($_POST);
*/

?>
