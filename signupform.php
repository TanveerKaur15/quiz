<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/normalize.min.css">
    <title>Document</title>
</head>
<body>
           <div class="signuppart" id="signupform"  style="float:left; width:100%;">
                <form class="form" autofill="off" autocomplete="off">
                       <div>
                            <label for="name">NAME : </label>
                            <input type="name" id="name1">
                        </div>
                        <div>
                            <label for="email">EMAIL : </label>
                            <input type="email" id="email1">
                        </div>
                        <div>
                            <label for="gender">GENDER : </label>
                            <input type="gender" id="gender1">
                        </div>
                        <div>
                            <label for="number">PHONE NUMBER : </label>
                            <input type="text" id="phone1">
                        </div>
                        <div>
                            <label for="password">PASSWORD : </label>
                            <input type="password" id="password1">
                        </div>
                        <div>
                            <label for="password">CONFIRM PASSWORD : </label>
                            <input type="password" id="confirmpassword">
                        </div>
                        <div class="submit-button">
                            <input type="submit"  id="submit1" name="submit1" onclick="sendsignup()">
                        </div>
                </form>
            </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
function sendsignup()
    {
        var name=document.getElementById('name1').value;
        var email=document.getElementById('email1').value;
        var gender=document.getElementById('gender1').value;
        var phone=document.getElementById('phone1').value;
        var password=document.getElementById('password1').value;
        var confirmpassword=document.getElementById('confirmpassword').value;
        var token="<?php echo password_hash("tokensignup", PASSWORD_DEFAULT)?>";
        if(name!=" " && email!=" " && gender!=" " && phone!=" " && password!=" " && confirmpassword!=" ")
        {
            if(password==confirmpassword)
            {
            $.ajax(
				{
					type:'POST',
					url:"ajax/signupformajax.php",
					data:{name:name , email:email , gender:gender , phone:phone , pass:password , cpass:confirmpassword , token:token},
					success:function(data)
					{
						alert(data);
					}
				});
            }
            else{
                alert("Password incorrect. Kindly enter again")
            }
        }
        else{
            alert("Please input all the fields");
        }

    }
</script>
<script type="text/javascript">
$('form').submit(function(e){
    e.preventDefault();
});
</script>