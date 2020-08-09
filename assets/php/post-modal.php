<?php

$recepient = "vit.vasilev2018@yandex.ru";
$subject = "Заявка с сайта Форма обратной связи ajax";
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: test.ru <test.ru>\r\n"; 

$name = trim($_POST["name"]);
$phone = trim($_POST["tel"]);

$message = "
Имя: $name <br/> 
Телефон: $phone";

mail($recepient, $subject, $message, $headers);