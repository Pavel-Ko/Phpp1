<html>
 <head>
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php 
        //phpInfo(); 
        echo '<p>Привет, мир!</p>';
        ?>
        
        Здравствуйте, <?php echo htmlspecialchars($_POST['name']); ?>.
        Вам <?php echo (int)$_POST['age']; ?> лет.
  <?php 
?>
 </body>
</html>
    