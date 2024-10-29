<?php
//ADD USER
function add_user()
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sql = "insert into user(name, pass, phone, email) values('$name' ,'$password', '$phone', '$email')";
    pdo_execute($sql);
}
