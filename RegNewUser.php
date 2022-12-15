<?php
$connectio=mysqli_connect('localhost','root','','jdm');
if (!$connectio) {
die("Ошибка: " . mysqli_connect_error());
}
$login = $_POST["user"];
$pass = $_POST["pass"];
$pass1 = $_POST["pass1"];
session_start();

include("boot1.php");

$result=$mysql->query("SELECT * FROM `users`");
$user1=$result->fetch_assoc();
$_SESSION['user1']=[
    "login"     =>$user1['UserLogin'],
];

if ($login != $_SESSION['user1']['login'])
{
    if ($pass == $pass1)
    {
        $sql = "INSERT INTO users (UserSurname, UserName, UserPartronomyc,UserRoleID , UserLogin, UserPassword, UserPhone) VALUES (null , null, null, 2, '$login', '$pass', null)";
        $result = mysqli_query ($connectio,$sql);
        echo "добавлено"; 
        unset($_SESSION['user1']);
    }
    else {
        echo "не совпадает";
        unset($_SESSION['user1']);
    }
}
else{
    echo "Пользователь с таким логином уже существует";
    unset($_SESSION['user1']);
}



?>