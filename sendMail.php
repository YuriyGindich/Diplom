<meta http-equiv='refresh' content='0; url=http://mercedes.p-host.in/pages/index.php'>
<meta charset="UTF-8" />
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];



$send = mail("uradrakon@mail.ru", "Новое письмо с сайта", "Имя: ".$name. "\n". "E-mail: " .$email."\n". "Телефон: ".$tel."\n". "Сообщение: ".$message, "From: no-reply@mydomain.ru \r\n");

if ($send == 'true') {echo "Сообщение отправлено";}
else {echo "Ой, что-то пошло не так";}


// $name = htmlspecialchars($name);
// $email = htmlspecialchars($email);
// $tel = htmlspecialchars($tel);

// $name = urldecode($name);
// $email = urldecode($email);
// $tel = urldecode($tel);

// $name =  trim($name);
// $email = trim($email);
// $tel = trim($tel);

// if (mail("uradrakon@mail.ru", "Новое письмо с сайта", "Имя: ".$name. "\n". "E-mail: " .$email."\n". "Телефон: ".$tel, "From: no-reply@mydomain.ru \r\n")
// ) {
//   echo ("Письмо успешно отправлено!");
// } else {
//   echo ('Есть ошибки! Провертье данные...');
// }
