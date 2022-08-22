<?php
if (!empty($_POST)) {

    $name;
    $email;
    $textarea;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $textarea = $_POST['textarea'];
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $textarea = htmlspecialchars($textarea);
    $name = urldecode($name);
    $email = urldecode($email);
    $textarea = urldecode($textarea);
    $name = trim($name);
    $email = trim($email);
    $textarea = trim($textarea);
    if (mail("galitskiy-vlad2002@mail.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email , "From: galitskiy-vlad2002@mail.ru \r\n"))
     {     echo "$textarea";
    } else {
        echo "при отправке сообщения возникли ошибки";
    }
}
require_once('index.html');
?>