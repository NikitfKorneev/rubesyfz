<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Елочные игрушки и украшения</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <header class="site-header">
      <div class="container">
        <h1>Магазин елочных игрушек</h1>
        <a href="<?php // начинаем первый PHP скрипт

      $name='Buy'; // переменная с текстом ссылки
      $link='index.php'; // переменная с адресом ссылки
      $current_page=true; // переменная, определяющая активность пункта меню

      echo $link; // выводим адрес ссылки
      ?>"><?php // начинаем второй PHP скрипт

      if( $current_page ) // если пункт меню активный
      ?><button class = "button" style = "position: absolute; left: 84%;top:2%; width: 15%;height: 5%">На главную</button></a>
    

      </div>
    </header>
    
    <section class="container">  
      <h3>Елочные игрушки и счатье в ваш дом</h3>
      <p>Наш магазин предлогает ваам большое колиичество различных ярких новогондих украшений по доступным ценам </p>
</section>


    <section class="advantages">
      <h3>Наши торвары</h3>
        <table border ="2" width="600px" bgcolor ="#bb8686">
        <tr>
          <td><a href="test.php"><img src="img/igrushka1.jpg" alt="Елочная игрушка"></td>
          <td><a href="test.php"><img src="img/igrusha2.jpg" alt="Елочная игрушка2"></td>
          <td><a href="test.php"><img src="img/igrushka3.jpg" alt="Елочная игрушка3"></td>
          <td><a href="test.php"><img src="img/igrusha4.jpg" alt="Елочная игрушка4"></td>
        </tr>    
        <tr>
          <td>Звездочки (в наличии 99)</td>
          <td>Шишки (в наличии 71)</td>
          <td>Снежинки (в наличии 12)</td>
          <td>Солульки (в наличии 8)</td>
        </tr>    
        </table>
      </ul>
    </section>






    <form action = "https://httpbin.org/post" method = "POST" enctype = "multipart/form-data" style = "position: absolute; left: 10%;top:39%; width: 45%;">    
    
    <label for = "email" >Логин <br><br><em></em></label>
    <input id = "email"><br>
    <label for = "password" >Пароль <br><br><em></em></label>
    <input id= "password" type = "password"><br>
    <input type="checkbox">
       Запомнить данные
    </label><br><br>


    <a href="<?php // начинаем первый PHP скрипт

      $name='Buy'; // переменная с текстом ссылки
      $link='index.php'; // переменная с адресом ссылки
      $current_page=true; // переменная, определяющая активность пункта меню

      echo $link; // выводим адрес ссылки
      ?>"><?php // начинаем второй PHP скрипт

      if( $current_page ) // если пункт меню активный
      ?><button class = "button" style = "position: absolute; left: -2%;top:90%; width: 30%;height: 20%">Войти</button></a>


</form>






    <footer class="site-footer">
      <div class="container">
        <p>Магазин по продаже елочных игрушек</p>
        <p>Создатель сайта Корнеев Н.В</p>
        <p>Для связи 8-912-008-1581</p>
      </div>
    </footer>
  </body>
</html>
