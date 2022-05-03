<?php
    if($_POST['capcha'] !=40){
        header('location: index.html');
        exit;
    }

    $to ="slava_kondyurin@mail.ru";

    $name = htmlspecialchars($_POST['name']);
    $name = urldecode($_POST['name']);
    $name = trim($name);


    $mail = htmlspecialchars($_POST['email']);
    $mail = urldecode($_POST['email']);
    $mail= trim($mail);

    $phnumb = htmlspecialchars($_POST['telephone']);
    $phnumb = urldecode($_POST['telephone']);
    $phnumb = trim($phnumb);

    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($_POST['message']);
    $message = trim($message);

    $headers =
    "Номер телефона: $phnumb" . "\r\n" . 
    "Ответить: $mail";

    if(mail($to, $name, $message, $headers)){
        echo "Письмо отправлено!";
    }else{
        echo "Письмо не удалось отправить!";
    }

?>