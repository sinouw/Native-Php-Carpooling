<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connectez</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="index/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="index/css/style.css">
</head>
<body>
    

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="login.php">
                        <h2 class="form-title">Connectez vous</h2>
                        <div class="form-group">
                        <div class="form-group">
                            <input type="number" class="form-input" name="cin" id="cin" placeholder="Cin"/>
                        </div>
                            <input type="password" class="form-input" name="password" id="pass" placeholder="Votre mot De Passe"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="row" style="margin-bottom:30px;">
						<div class="col-sm-5">
							
						<img src="captcha.php" width="120" height="30" border="1" alt="CAPTCHA">
						
						
						</div>
						<div class="col-sm-6">
						<label for="email">Enter the code from the image here:</label>
						<input type="text" name="captcha" value="" class="form-control" required  >
						</div>
					</div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Connectez vous"/>
                        </div>
                    </form>
                  
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="index/vendor/jquery/jquery.min.js"></script>
    <script src="index/js/main.js"></script>
</body>
</html>

<?php
session_start();
if(isset($_POST)  & !empty($_POST)){
	if($_POST['captcha'] == $_SESSION['digit']){
		
		$conn=mysqli_connect("localhost","root","","covoiturage");
if(!$conn)
	echo "error de connection";


$name=mysqli_real_escape_string($conn,$_POST['cin']);
$pwd=mysqli_real_escape_string($conn,$_POST['password']);

$sql="select * from conducteur where cin='$name' and mdp='$pwd'";

$res=mysqli_query($conn, $sql);
//$row=$res->fetch_array(MYSQLI_NUM);
if($res){
	
    echo"<script>alert('you are logged in');</script>";
    header('Location:index.php');
}
else{
    echo"<script>alert('username / password incorrect');</script>";
    echo"<script>alert('user : $name , mdp : $pwd');</script>";
	}

	}else{
        
		echo"<script>alert('Invalid captcha');</script>";
	}
}
?>