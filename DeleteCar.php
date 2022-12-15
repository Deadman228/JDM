<?php  
    $connectio=mysqli_connect('localhost','root','','jdmtest');
    if (!$connectio) {
    die("Ошибка: " . mysqli_connect_error());
    }
    $ModelIDi =  $_POST["ModelIDi"];

    if (isset($_POST["ModelIDi"]) != null)
    {
        $sql = "DELETE FROM car WHERE ModelID = '$ModelIDi'";
        $result = mysqli_query ($connectio,$sql);
        echo "Удалено";
    }
    else 
    {
        echo "Ошибка";
    }
?>