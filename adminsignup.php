<!DOCTYPE>
<html>
<head>
<title>Welcome to Quran Academy</title>
<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'conn.php';
    $username = $_POST["uname"];
	$useremail = $_POST["uemail"];
    $password = $_POST["upass"];
    $cpassword = $_POST["uconpass"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `admindata` ( `Name`, `Email`, `Password`, `TimeAndDate`) VALUES ('$username', '$useremail', '$password', current_timestamp())";
        $result = mysqli_query($link, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>

<style>
#div
{
	width:1300px;
	height:670px;
	margin-left:auto;
	margin-right:auto;

}

#content
{
	width:1250px;
	height:650px;
	position:absolute;
	margin-top:10px;
	margin-left:auto;
	margin-right:auto;
}
#footer
{
	width:1300px;
	height:100px;
	position:absolute;
	margin-top:670px;
	text-align:center;
	margin-left:auto;
	margin-right:auto;


}
	
		.p2{
			text-align:right;
			font-weight:bold;
			color: #030;
			}
					
</style>
 <!-- Font Icon -->
   <!-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">-->

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div ID="div">
 <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> This account is now created and he can now login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
<div id="content">
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="uname" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="uemail" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="upass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="uconpass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.png" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
</div>
<div id="footer"><p class="p2">&copy;2022 All Rights Reserved &reg; Muhammad Fahd Rafique Khan</p>
<p class="p2"> Contact#03055444774		E.mail# m.fahdrafiquekhan@gmail.com</p>
</div>
</div>
</body>
</html>
