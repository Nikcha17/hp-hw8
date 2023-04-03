<?php
  $name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang = "ru">
    <head>
        <meta charset="UTF-8">
        <title>Information about me</title>
    </head>
    <body>
        <form action="exit.php" method="post">
            <?php echo "<span class='userName'>Вы вошли под именем: $name</span>";?>
            <input type="submit" name="submit" value="Выйти" />
        </form>
    </body>
</html>
