<?php

$name = $_POST['name'];
$tel = $_POST['tel'];
$message = $_POST['message'];


$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$message = htmlspecialchars($message);

$name = urldecode($name);
$tel = urldecode($tel);
$message = urldecode($message);

$name = trim($name);
$tel = trim($tel);
$message = trim($message);

if(mail("zakhar.demidov.96@mail.ru",
        "Новое письмо с сайта!",
        "Имя: ".$name."\n".
        "Телефон: ".$tel."\n".
        "Сообщение: ".$message,
        "От: lesha.ilykevich.98@mail.ru \r\n")
){
    header("Location: http://designer-cv/pages/thanks/");
} 
else {
    header("Location: http://designer-cv/pages/error/");
}

ini_set('display_errors','On');
error_reporting('E_ALL');
?>