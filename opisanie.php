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
    
    <section class="advantages1">
      <h3>Подробное описание товарного ряда</h3>
        <table border ="2" width="100px" bgcolor="#ffffff">

        <tr>
          <td><a href="test.php"><img src="img/zv1.jpg" alt="Елочная игрушка"></td>
          <td><a href="test.php"><img src="img/zv2.jpg" alt="Елочная игрушка2"></td>
          <td><a href="test.php"><img src="img/zv3.jpg" alt="Елочная игрушка3"></td>
          <td><a href="test.php"><img src="img/zv4.jpg" alt="Елочная игрушка4"></td>
        </tr>    
        <tr>
          <td>Цена 100р 
            <br>
            Вес 20г 
            <br>
            Эргановичный вид сделано из стекла срок годности не ограничен</td>
          <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
          <td>Цена 300р<br> Вес 30г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
          <td>Цена 104р<br> Вес 123г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        </tr>    
        <tr>
          <td><a href="test.php"><img src="img/sos1.jpg" alt="Елочная игрушка"></td>
          <td><a href="test.php"><img src="img/sos2.jpg" alt="Елочная игрушка2"></td>
          <td><a href="test.php"><img src="img/sos3.jpg" alt="Елочная игрушка3"></td>
          <td><a href="test.php"><img src="img/sos4.jpg" alt="Елочная игрушка4"></td>
        </tr>    
        <tr>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        </tr>    
        <tr>
          <td><a href="test.php"><img src="img/sh1.jpg" alt="Елочная игрушка"></td>
          <td><a href="test.php"><img src="img/sh2.jpg" alt="Елочная игрушка2"></td>
          <td><a href="test.php"><img src="img/sh3.jpg" alt="Елочная игрушка3"></td>
          <td><a href="test.php"><img src="img/sh4.jpg" alt="Елочная игрушка4"></td>
        </tr>    
        <tr>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        </tr>    
        <tr>
          <td><a href="test.php"><img src="img/sn1.jpg" alt="Елочная игрушка"></td>
          <td><a href="test.php"><img src="img/sn2.jpg" alt="Елочная игрушка2"></td>
          <td><a href="test.php"><img src="img/sn3.jpg" alt="Елочная игрушка3"></td>
          <td><a href="test.php"><img src="img/sn4.jpg" alt="Елочная игрушка4"></td>
        </tr>    
        <tr>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        <td>Цена 200р<br> Вес 21г <br>Эргановичный вид сделано из стекла срок годности не ограничен</td>
        </tr>    

        </table>
      </ul>


      
    </section>

    <footer class="site-footer">
      <div class="container">
        <p>Магазин по продаже елочных игрушек</p>
        <p>Создатель сайта Корнеев Н.В</p>
        <p>Для связи 8-912-008-1581</p>
      </div>
    </footer>
  </body>
</html>
