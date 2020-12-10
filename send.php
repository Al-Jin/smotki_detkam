<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['tema'])) {
    $tema = $_POST['tema'];
}
if (isset($_POST['tekst'])) {
    $tekst = $_POST['tekst'];
}

/* Проверка введенных данных: функция преобразует все символы, которые пользователь попытается добавить в форму.
Символ "<" в '&lt;', также и с остальными символами */
$phone = htmlspecialchars($phone);
/* Проверка введенных данных: функция декодирует url, если пользователь попытается его добавить в форму. */
$phone = urldecode($phone);
/* Проверка введенных данных: функция удаляет пробелы с начала и конца строки, если таковые имеются. */
$phone = trim($phone);
$name = htmlspecialchars($name);
$name = urldecode($name);
$name = trim($name);
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);
$tema = htmlspecialchars($tema);
$tema = urldecode($tema);
$tema = trim($tema);
$tekst = htmlspecialchars($tekst);
$tekst = urldecode($tekst);
$tekst = trim($tekst);

/* Сюда впишите свою эл. почту */
$myaddres = "info@shmotki-detkam.ru"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Заявка на пошив с сайта\nИмя: $name\nТелефон: $phone\nПочта: $email\nТема: $tema\n $tekst";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub = 'Заявка'; //сабж
/*$email = 'Заявка на пошив с сайта'; // от кого*/
$send = mail($myaddres, $sub, $mes, "Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="refresh" content="3; url=index.html">
    <title>Спасибо! Мы свяжемся с вами!</title>
    <meta name="generator">
    <script type="text/javascript">
        setTimeout('location.replace("index.html")', 2000);
        /*Изменить текущий адрес страницы через 2 секунды (2000 миллисекунд)*/
    </script>
</head>

<body>
    <h1>Спасибо! Мы свяжемся с вами!</h1>
</body>

</html>