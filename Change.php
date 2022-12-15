<?php  
                    $connectio=mysqli_connect('localhost','root','','jdmtest');
                    if (!$connectio) {
                    die("Ошибка: " . mysqli_connect_error());
                    }
                    $OrderSostav = $_POST['OrderSostav'];
                    $OrderCheck = $_POST["OrderCheck"];
                    $ZakazchikID = $_POST["ZakazchikID"];
                    $OrderIDi =  $_POST["OrderIDi"];
                    $sql =UPDATE `orka` SET `OrderSostav` = 'sostav22' WHERE `orka`.`OrderID` = 5
                    $result = mysqli_query ($connectio,$sql);
                    echo "Удалено";
                    ?>



