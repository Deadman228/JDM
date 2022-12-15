<?php
//$connection=mysqli_connect('localhost','root','','jdm');
//session_start();

$mysql = new mysqli('localhost','root','','jdm');
if($mysql ->connect_errno) exit ('ошибка подключения')

// function pdo(): PDO
// {
//     static $pdo;

//     if (!$pdo) {
//         $config = include __DIR__.'/config.php';
//         // Подключение к БД
//         $dsn = ' mysql:host= localhost ; dbname=jdm; charset=utf8';
//         $username = 'root';
//         $password = '';
//         $options = array(
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,); 
//         $dbh = new PDO($dsn, $username, $password, $options);
//         // $config = include __DIR__.'/config.php';
//         // $dsn = 'mysql:dbname='.$config['db_name'].';host='.$config['db_host'];
//         // $pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
//         // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     }

//     return $pdo;
// }
?>



