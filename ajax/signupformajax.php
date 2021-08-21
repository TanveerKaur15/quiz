<?php
include('../connection.php');
if(isset($_POST['token']) && password_verify("tokensignup",$_POST['token']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $password=$_POST['pass'];
    $confirmpassword=$_POST['cpass'];
    if($name!="" && $email!="" && $gender!="" && $phone!="" && $password!="")
    {
        $query=$db->prepare("INSERT INTO users(name,email,gender,phone,password) VALUES (?,?,?,?,?)");
        $data=array($name,$email,$gender,$phone,password_hash($password,PASSWORD_DEFAULT));
        $execute=$query->execute($data);
        if($execute)
        {
            echo "user created successfully";
        }
        else{
            echo "something went wrong";
        }
    }
}
?>