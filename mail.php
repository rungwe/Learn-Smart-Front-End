<?php
	function send(){
   $to = "kumbirair@yahoo.com";
   $subject = "we are testing";
   $message = "This is simple text message.";
   $header = "From:info@learnsmart.co.za \r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }
   }
?>