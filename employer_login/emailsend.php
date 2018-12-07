<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      <?php
      	ini_set('SMTP', "gmail.com");
		ini_set('smtp_port', "25");
		ini_set('sendmail_from', "email@domain.com");
         
         $to = $_POST['job_seeker_email'];

         $subject = $_POST['subject'];
         
         $message = $_POST['message'];         

         $header = $_POST['employer_email'];
         $header .= "MIME-Version: 1.0\r\n";
		$header .= 'From: Your name <info@address.com>' . "\r\n";
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