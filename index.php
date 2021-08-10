<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/normalize.min.css">
    <title>Document</title>
</head>
<style>
    .hidden
    {
        display:none;
    }
    .show
    {
        display:block;
    }
</style>
<body>
    <section>
            <div class="contain">
                <div class="heading">
                        <p>APPOINTMENT BOOKING SYSTEM</p>
                </div>
            </div>
		<div class="col-sm-12">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="sec-button" style="float:left; width:100%; text-align: center;">
                            <div class="col-sm-6">
                               <div class="login">
                                    <input type="submit" id="login" name="login" value="LOG IN">
                               </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="signup">   
                                    <input type="submit" id="signup" name="login" value="SIGN UP">
                                </div>
                            </div>
                        </div>
                <div class="loginpart" id="loginform" style="float:left; width:100%;">
                <form class="form">
                        <div>
                            <label for="email">EMAIL : </label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div>
                            <label for="password">PASSWORD : </label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <div class="submit-button">
                            <input type="submit" id="submit" name="submit" onclick="sendlogin()">
                        </div>
                </form>
            </div>
            <div class="signuppart hidden" id="signupform"  style="float:left; width:100%;">
                <form class="form">
                        <div>
                            <label for="email">EMAIL : </label>
                            <input type="email" class="form-control">
                        </div>
                        <div id="age">
                            <label for="age">AGE : </label>
                            <input type="text" class="form-control">
                        </div>
                        <div id="phone">
                            <label for="number">PHONE NUMBER : </label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="password">PASSWORD : </label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="submit-button">
                            <input type="submit" name="submit">
                        </div>
                </form>
            </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </section>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
   var btn=document.getElementById('signup');
    btn.addEventListener("click",function(){
         document.getElementById('loginform').classList.add('hidden');
         document.getElementById('signupform').classList.remove('hidden');
         document.getElementById('signupform').classList.add('show');
    });
    var btn1=document.getElementById('login');
    btn1.addEventListener("click",function(){
        document.getElementById('signupform').classList.add('hidden');
        document.getElementById('loginform').classList.remove('hidden');
         document.getElementById('loginform').classList.add('show');  
    });
    function sendlogin()
    {
        var email=document.getElementById('email').value;
        var password=document.getElementById('password').value;
        var token="<?php echo password_hash("tokenlogin", PASSWORD_DEFAULT)?>";
        if(email!=" " && password!=" ")
        {
            $.ajax(
				{
					type:'POST',
					url:"ajax/login.php",
					data:{name:email,pass:password,token:token},
					success:function(data)
					{
						alert(data);
					}
				});
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