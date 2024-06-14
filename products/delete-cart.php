<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php


    $deleteAll = $conn->query("DELETE FROM cart WHERE user_id = '$_SESSION[user_id]'");
    $deleteAll->execute();

    header("location: cart.php");