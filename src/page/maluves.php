<?php
    session_start();
    $username = $_SESSION["username"];
    if(!$username)
    {
        $_SESSION["error"] = "Você precisa fazer login para acessar esta página.";
        header("location:login.php");
    }else {
        include '../template/template_maluves.php';
    }
?>
