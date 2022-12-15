<?php  
    $connectio=mysqli_connect('localhost','root','','jdmtest');
    if (!$connectio) {
    die("Ошибка: " . mysqli_connect_error());
    }

    $OrderSostav = $_POST['OrderSostav'];
    $OrderCheck  = $_POST["OrderCheck"];
    $ZakazchikID = $_POST["ZakazchikID"];
    $sql = "INSERT INTO orka (OrderID, OrderSostav ,OrderCheck, ZakazchikID ) VALUES (NULL, '$OrderSostav', '$OrderCheck', '$ZakazchikID')";
    $result = mysqli_query ($connectio,$sql);
    echo "Добавлено";
?>