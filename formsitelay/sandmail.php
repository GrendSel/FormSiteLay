<?php
    if($_POST['capcha'] !=40){
        header('location: index.html');
        exit;
    }

    $to ="slava_kondyurin@mail.ru";

    $name = htmlspecialchars($_POST['name']);
    $name = urldecode($_POST['name']);
    $name = trim($name);


    $mail_tel = htmlspecialchars($_POST['emtel']);
    $mail_tel = urldecode($_POST['emtel']);
    $mail_tel = trim($mail_tel);

    /*$phnumb = htmlspecialchars($_POST['telephone']);
    $phnumb = urldecode($_POST['telephone']);
    $phnumb = trim($phnumb);*/

    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($_POST['message']);
    $message = trim($message);

    $headers =
    "Почта/Номер телефона: $mail_tel" . "\r\n" . 
    "Ответить: $mail_tel";

    if(mail($to, $name, $message, $headers)){
        ?> <script>alert('Письмо успешно отправлено')</script> <?php
        header("Refresh: 0");
    }else{
        ?> <script>alert('Письмо не отправлено')</script> <?php
        header("Refresh: 0");
    }
?>
