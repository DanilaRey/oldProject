<?php
$login=$_POST["login"];
$password=$_POST["password"];


$query=mysqli_connect('127.0.0.1','root','','database');
$query->set_charset('utf-8');
if (isset($_POST['login']) && isset($_POST['password']))
{
    $login = ($_POST['login']);
    $password = md5($_POST['password']);

// делаем запрос к БД
// и ищем юзера с таким логином и паролем

$result=$query->$query = ("SELECT `id`
            FROM `auth`
            WHERE `login`='{$login}' AND `password`='{$password}'");
//$sql = mysqli::query ($query) or die(mysqli::$error());/

// если такой пользователь нашелся
if ($result == 1) {
    // то мы ставим об этом метку в сессии (допустим мы будем ставить ID пользователя)

    $row = mysqli_result::fetch_assoc($sql);
    $_SESSION['user_id'] = $row['id'];

    // не забываем, что для работы с сессионными данными, у нас в каждом скрипте должно присутствовать session_start();
}
else {
    die('Такой логин с паролем не найдены в базе данных. И даём ссылку на повторную авторизацию.');
}
}