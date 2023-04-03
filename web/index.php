<?php
declare(strict_types=1);
session_start();

if (!isset($_SESSION['name'])) {
    include "info.php";
} else{
    include "login.html";
}