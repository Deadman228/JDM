<!DOCTYPE HTML>

<html>
    
      <title>JDM_Registration</title>
      <link rel="stylesheet" href="CSS/Reg.css">
    <body>

        <video autoplay muted loop id="myVideo">
  <source src="Recources/auth.mp4" type="video/mp4">
</video>
        
        <div id="head" >
            
          <a href="Main.php"><image src="Recources/log.png"></image></a>
            <p></p>
            <p id="logoname"><font size="20" color="White" face="Old English Text MT">JDM</font></p>
            <p id="NamePage"><font size="20" color="White" face="Old English Text MT">Регистрация на JDM</font></p>
        </div>
        <div class="content3">
       

<div id="wrapper">
    <form id="signin" method="Post" action="RegNewUser.php" autocomplete="off">
        <input type="text" id="user" name="user" placeholder="Логин" required/>
        <input type="password" id="pass" name="pass" placeholder="Пароль" required/>
        <input type="password" id="pass1" name="pass1" placeholder="Пароль еще раз" required/>
        <p><button type="submit">&#xf0da;</button></p>
    </form>
</div>
</div>
    </body>
    </html>