<?php


// $Useremail= $_POST['email'];
$name= $_POST['name'];
$number= $_POST['number'];
$date= $_POST['date'];
$destination= $_POST['destination'];
$guests= $_POST['guests'];







 $to = 'consult@colossustours.com'; // replace this mail with yours
$number = $_POST["number"];
$email= "colossustours.com";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
$message = " name is : {$name}. <br> number is: {$number} <br> date is: {$date} <br> destination is: {$destination} <br> guests is: {$guests} ";
 
if (@mail($to, $email, $message, $headers))
{
    "<script> alert('The message has been sent') </script>" ;
    header("Location:synchronize.html");
    // echo 'The message has been sent.';
}else{
    "<script> alert('failed') </script>" ;
}



         


?>