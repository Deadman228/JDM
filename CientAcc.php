<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings</title>
    <link rel="stylesheet" href="CSS/ClientAcc.css">
        <link rel="stylesheet" href="CSS/settingsModalWindows.css">
</head>
<body>

<!--    HEADER-->

<div class="header">

    <div class="header-content">

        <div class="header-content-container">
            <div class="header-content-container-object-logo">
                JDM
            </div>
        </div>
            <div class="header-content-container-object-right">
                <a href="Auth.php" class="header-content-container-object-text">
                    ВЫЙТИ
                </a>
            </div>
        </div>
    </div>
</div>

<div class="wrap">
    <div class="settings__header">
        <div class="settings__header__text">ЗАКАЗЫ</div>
          <?php 

            session_start();
            

            if ($_SESSION['user']['login'] != null && $_SESSION['user']['role'] == 2)
            {
                $user=$_SESSION['user']['login'];
                
            }
            else if(isset($_SESSION['user']['role']) != 1) {
                $user = 'Пустые значения';
                
            }
            else{
                
            }
            echo $user;
            echo "........";
            echo $_SESSION['user']['login'];
            echo "........";
            echo $_SESSION['user']['role'];
          ?>
    </div>
        <div class="settings-body-items">
            <div class="settings-body-items-left">
                <?php
    
         $usersearch=$user;
        $connection=mysqli_connect('localhost','root','','JDM');
        $categories = mysqli_query($connection, 'Select * from orderr where ZakazchikID like"%'.$usersearch.'%"');
        echo'<div class="content3">';
        echo '<nav class="nav">';
        while( $id = mysqli_fetch_array($categories))
                {
        echo '<div class="home-content-container-item-bottom">';
        echo '<div>';
        echo '<div class="home-content-container-item-bottom-object"><label id="example">Номер заказа:'.$id['OrderID'].'</label></div>';
        echo '<a href="#open-window-add_currency" ><img src="Glav_car.png"></a>';
        echo '<div class="home-content-container-object-item-top-text"><label id="example1">Состав(Vin),(Машина):'.$id['OrderSostav'].'</label></div>';
        echo '</div>';
        echo '<div class="home-content-container-object-item-top-text-desc">Номер чека:'.$id['OrderCheck'].'<p>Заказчик:'.$id['ZakazchikID'].'';
        echo '<p>';
        echo '</div>';
        echo '</div>';
    };
    ?>
            </div>
            
        </div>
    </div>
    </div>
</body>
</html>