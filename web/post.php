<?php
 declare(strict_types=1);

function clearStringFromRequest(string $str): string
{
    $d = trim($d);
    $d = stripslashes($d);
    $d = htmlspecialchars($d);
    return $data;
}

$userName = clearStringFromRequest($_POST['user_name']);

if ($userName !== '') {
    session_start();
    $_SESSION['user_name'] = $userName;
}

header('Location: index.php');
