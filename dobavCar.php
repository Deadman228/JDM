<?php  
    $connectio=mysqli_connect('localhost','root','','jdmtest');
    if (!$connectio) {
    die("Ошибка: " . mysqli_connect_error());
    }
    $Model  = $_POST["Model"];
    $Year   = $_POST["Year"];
    $Color  = $_POST["Color"];
    $Probeg = $_POST["Probeg"];
    $Compl  = $_POST["Compl"];
    $VIN    = $_POST["VIN"];
    $cost   = $_POST["cost"];
    $sql = "INSERT INTO car (Modelid,Model, Yearr, Color, Probeg, Compl, VIN, cost ) 
    VALUES (null , '$Model' , '$Year', '$Color', '$Probeg' , '$Compl', '$VIN', '$cost')";
    $result = mysqli_query ($connectio,$sql);
    echo "добавлено"; 
?>