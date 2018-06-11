<html>
    <head>
        <meta charset="UTF-8">
    </head>

<?php
require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка: " . mysqli_error($link));
	
// выполняем операции с базой данных
$query =("INSERT INTO `info`(`Фамилия`, `Имя`, `Отчество`, `Телефон`, `Email`, `Имя ребенка`, `Возраст`, `Пол`, `Проблема`, `Дата`, `Время`) VALUES (
".($_POST['fam']).",
".($_POST['name']).",
".($_POST['otch']).",
".($_POST['tel']).",
".($_POST['mail']).",
".($_POST['name2']).",
".($_POST['vosrast']).",
".($_POST['pol']).",
".($_POST['bio']).",
".($_POST['dater']).",
".($_POST['time']).")");  
$result = mysqli_query($link, $query) or die("Ошибка: " . mysqli_error($link)); 

// закрываем подключение
mysqli_close($link);
?>