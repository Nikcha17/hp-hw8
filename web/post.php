<?php
declare(strict_types=1);

session_start();
if ($_POST['userName'] !== '') {
  $_SESSION['name'] = $_POST['userName'];
}  

$path = $_SERVER["HTTP_HOST"];
header("Location: http://${path}/index.php");