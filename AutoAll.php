<!DOCTYPE HTML>

<html>
    
      <title>JDM_Auto</title>
      <link rel="stylesheet" href="AutoAll.css">
    <body>
    	<?php
$connection=mysqli_connect('localhost','root','','jdm');
$sql="SELECT Model FROM Car";
$massive=mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($massive);
foreach ($data as $key => $value) {
    print($value);
}
        ?>
        <video autoplay muted loop id="myVideo">
  <source src="PageCars.mp4" type="video/mp4">
</video>
        
        <div id="head" >
            <form >
   <p><input type="search" class="search-box" name="q" placeholder="Поиск по сайту"> 
   <input type="submit" class="search-button" value="Найти"></p>
  </form>
         <a href="Main.php"><image src="log.png"></image></a>
            
            <p></p>
            
         <p id="logoname"><font size="20" color="White" face="Old English Text MT">JDM</font></p>
  
            </div>
            <div class="content3">
<div class="home-content-container-object">
                <div class="home-content-container-item-bottom">
                    <div>
                    <div class="home-content-container-item-bottom-object"><?php echo $value; ?></div> <!--CAPS-->
                    <a href="#"><img src="Glav_car.png"></a>
                    <div class="home-content-container-object-item-top-text">Цена: 228</div>
                    </div>
                    <div class="home-content-container-object-item-top-text-desc">Описание: Что-то должно быть тут. Допустим это чистокровный японец состоящий только из японских деталей, которые были созданы и собраны именно в японии</div> <!--CAPS-->
                </div>

                
            </div>
            <div class="home-content-container-object">
                <div class="home-content-container-item-bottom">
                    <div>
                    <div class="home-content-container-item-bottom-object">Toyota:Supra</div> <!--CAPS-->
                    <a href="#"><img src="Glav_car.png"></a>
                    <div class="home-content-container-object-item-top-text">Цена: 228</div>
                    </div>
                    <div class="home-content-container-object-item-top-text">Описание: Что-то должно быть тут</div> <!--CAPS-->
                </div>
                
                
            </div>
            <div class="home-content-container-object">
                <div class="home-content-container-item-bottom">
                    <div>
                    <div class="home-content-container-item-bottom-object">Toyota:Supra</div> <!--CAPS-->
                    <a href="#"><img src="Glav_car.png"></a>
                    <div class="home-content-container-object-item-top-text">Цена: 228</div>
                    </div>
                    <div class="home-content-container-object-item-top-text">Описание: Что-то должно быть тут</div> <!--CAPS-->
                </div>
                
                
            </div>
            <div class="home-content-container-object">
                <div class="home-content-container-item-bottom">
                    <div>
                    <div class="home-content-container-item-bottom-object">Toyota:Supra</div> <!--CAPS-->
                    <a href="#"><img src="Glav_car.png"></a>
                    <div class="home-content-container-object-item-top-text">Цена: 228</div>
                    </div>
                    <div class="home-content-container-object-item-top-text">Описание: Что-то должно быть тут</div> <!--CAPS-->
                </div>
                
                
            </div>
    
</div>
        </body>
</html>