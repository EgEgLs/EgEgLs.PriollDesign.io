<?php
include "config.php";
session_start();
if (isset($_POST["name"]) && isset($_POST["mail"]) ) { 

	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$message = $_POST['message'];
    

    $sql = ("INSERT INTO `users_message`(`name`, `email`, `message`) VALUES ('$name', '$mail', '$message')");
	$usr = mysqli_query($dbcon, $sql);
    if ($usr) {
        $_SESSION["ms"] = "Форма отправлена";
        header("Location: contact.php");
    }
    else{
        $_SESSION["ms"] = "Форма не отправлена";
        header("Location: contact.php");
    }
    
}
?>
