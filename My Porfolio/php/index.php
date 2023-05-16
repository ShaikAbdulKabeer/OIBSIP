<?php

$name= $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$Message= $_POST['Message'];
    
    
$mailheader ="From:".$name."<".$email.">\r\n";
   
$recipent = "shaikabdulkabeer07@gmail.com";
    
mail($recipent,$subject,$Message,$mailheader) or die("Error!");
    
echo'
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/font/flaticon.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
        <title>Contact form</title>
        
    </head>
    <body>
        <div class="container">
            <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
            <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
            
        </div>
    </body>
    </html>
     
';

?>