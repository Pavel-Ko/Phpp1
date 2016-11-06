<html>
 <head>
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php 
    phpInfo(); 
    echo $_SERVER['HTTP_USER_AGENT'];
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'KHTML') !== FALSE) {
    echo 'Вы используете кажется Internet Explorer.<br />';
    }?>
     <form action="hello.php" method="post">
        <p>Ваше имя: <input type="text" name="name" /></p>
        <p>Ваш возраст: <input type="text" name="age" /></p>
        <p><input type="submit" /></p>
        </form>
  <?php 
 ?>
 </body>
</html>