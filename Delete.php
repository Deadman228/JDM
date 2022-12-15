<?php  
    $connectio=mysqli_connect('localhost','root','','jdmtest');
    if (!$connectio) {
    die("Ошибка: " . mysqli_connect_error());
    }
    $OrderIDi =  $_POST["OrderIDi"];
    $sql = "DELETE FROM orka WHERE OrderID = '$OrderIDi'";
    $result = mysqli_query ($connectio,$sql);
    echo "Удалено";
?>