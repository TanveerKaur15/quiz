<?php
if(isset($_POST['token']) && password_verify("tokenlogin",$_POST['token']))
{
    $email=$_POST['mail'];
    $password=$_POST['pass'];
    echo $email;
    echo $password;
}
?>