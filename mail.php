<?php
$name =	trim(htmlspecialchars($_POST['name']));
$email =	trim(htmlspecialchars($_POST['email']));

echo $name;
echo $email;
   
   $headers = "MIME-Version: 1.0\n" ; 
   $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n"; 
   $headers .= "X-Priority: 1 (Highest)\n"; 
   $headers .= "X-MSMail-Priority: High\n"; 
   $headers .= "Importance: High\n"; 

mail("kopitnik_artyom@mail.ru", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: example2@mail.ru \r\n", $headers);