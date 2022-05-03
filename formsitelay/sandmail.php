<?php
    if($_POST['capcha'] !=40){
        header('location: index.html');
        exit;
    }

    $to ="slava_kondyurin@mail.ru";

    $name = $_POST['name'];
    $name = htmlspecialchars($_POST['name']);
    $name = urldecode($_POST['name']);

    $number_mail = htmlspecialchars($_POST['enum']);
    $number_mail = urldecode($_POST['enum']);
    $number_mail = trim($_POST['enum']); 

    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($_POST['message']);
    $message = trim($_POST['message']);

    $headers = "FROM: $name" . "\r\n" . 
    "Reply to : $name " . "\r\n" . 
    "X-Mailer: PHP/" . phpversion();

    if(mail($to, $name, $number_mail, $message)){
        echo "Письмо отправлено!";
    }else{
        echo "Письмо не удалось отправить!";
    }

?>