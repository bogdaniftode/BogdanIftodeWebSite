<?php
 $name=$_POST['visitor_name'];
 $email=$_POST['visitor_email'];
 $country=$_POST['chose_country'];
 $message=$_POST['visitor_message'];
 $formcontent=" From: $name \n Email: $email \n From Country: $country \n Message: $message";
 $recipient = "bogdaniftode@gmail.com";
 $subject = "Contact from Iftode Bogdan-Webistie";
 $mailheader="From: $email \r\n";
 mail($recipient, $subject, $formcontent, $mailheader);
 header("Location: index.html");
 ?>