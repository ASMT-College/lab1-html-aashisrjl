<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender']; 

    echo("hi: ". $username . '<br>');
    echo("email: ". $email. '<br>');
    echo("password: ". md5($password). '<br>');
    echo("gender: ". $gender. '<br>');
}
?>
