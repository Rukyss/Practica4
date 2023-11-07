<?php
session_start();

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "1234") {
        $_SESSION["username"] = $username;
        header("Location: correcto.php");
        exit();
    } else {
        header("Location: inicio.html");
        exit();
    }
}
?>

