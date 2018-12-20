<html> 
   
   <head>
      <title>Sending email</title>
   </head>
   
   <body>
      <?php
      ini_set("SMTP","ssl://smtp.gmail.com");
      ini_set("smtp_port","587");
         
         $to = $_POST['contact_person_email'];

         $subject = $_POST['subject'];
         
         $message = $_POST['message'];         

         $header = $_POST['admin_email'];
         $header .= "MIME-Version: 1.0\r\n";
		   $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
         
         $retval = mail ($to,$subject,$message, $header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
        </body>
</html>