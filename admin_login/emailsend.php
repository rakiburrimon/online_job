
   
   <head>
      <title>Sending email</title>
   </head>
   
   <body>
<?php
    $to=$_POST['contact_person_email'];
    $subject=$_POST['subject'];
    $msg=$_POST['message'];
    $header="rakiburrahmanrimon@gmail.com";
    $success=mail($to,$subject,$msg,$header);
    if($success==true){
        echo "Email send successfully ";
    } else{
        echo "Error sending email";
    }

?>
        </body>
