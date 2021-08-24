<?php
include('../connection.php');
if(isset($_POST['token']) && password_verify("tokenlogin",$_POST['token']))
{
    $email=$_POST['name'];
    $password=$_POST['pass'];

    $query=$db->prepare("SELECT * FROM `quiz` WHERE name=?");
    $data=array($email);
    $execute=$query->execute($data);
    if($query->rowcount() > 0)
    {
        while($datarow=$query->fetch())
        {
            if(password_verify($password,$datarow['password']))
            {
                echo 0;
                break;
            }
        }
    }
    else{
        echo "Please signup again. No data found";
    }
}
else{
    echo "Server Error";
}
?>