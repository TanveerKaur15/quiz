<?php
if(isset($_POST['token']) && password_verify("tokenlogin",$_POST['token']))
{
    $email=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $password=$_POST['pass'];
    $confirmpassword=$_POST['cpass'];
    echo $email;
    echo $age;
    echo $phone;
    echo $password;
    echo $confirmpassword;
}
?>