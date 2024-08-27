<!DOCTYPE>
<html>
<head>
<title>Welcome to Quran Academy</title>
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'conn.php';
    $username = $_POST["your_name"];
    $password = $_POST["your_pass"]; 
    
     
    $sql = "Select * from userdata where Email='$username' AND Password='$password'";
    $result = mysqli_query($link, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: usercomments.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>
<style>
.diww a:link
{
	text-decoration:none;
	color:white;
	background-color: #030;
	font-size:30px;
	border-radius:30px;
	text-align:center;
	width:200px;
	height:50px;
	line-height:50px;
	display: block;
}
.diww a:hover
{
	text-decoration:none;
	color:#090;
	background-color: #030;
	font-size:30px;
	border-radius:30px;
	text-align:center;
	width:200px;
	height:50px;
	line-height:50px;
	display:block;
}
.diww a:active
{
	text-decoration:none;
	color:white;
	background-color: #030;
	font-size:40px;
	border-radius:30px;
	text-align:center;
	width:200px;
	height:50px;
	line-height:50px;
	display:block;
}
.diww a:visited
{
	text-decoration:none;
	color:white;
	background-color: #030;
	font-size:40px;
	border-radius:30px;
	text-align:center;
	width:200px;
	height:50px;
	line-height:50px;
	display:block;
}

#div
{
	width:1300px;
	height:1500px;
	margin-left:auto;
	margin-right:auto;

}
#banner
{
	width:1300px;
	height:300px;
	position:absolute;
	text-align:center;
	line-height:300px;
	font-weight:bold;
	color:#FFF;
	margin-left:auto;
	margin-right:auto;
}
#menu
{
	width:1300px;
	height:60px;
	position:absolute;
	margin-top:300px;
	
	font-weight:bold;
	color:#FFF;
	
	line-height:100px;
	text-align:center;
	margin-left:auto;
	margin-right:auto;

}
#slider
{
	width:1300px;
	height:390px;
	position:absolute;
	margin-top:360px;
	font-weight:bold;
	color:#FFF;
	text-align:center;
	margin-left:auto;
	margin-right:auto;

}
#content
{
	width:1250px;
	height:650px;
	position:absolute;
	margin-top:750px;
	margin-left:auto;
	margin-right:auto;
}
#footer
{
	width:1300px;
	height:100px;
	position:absolute;
	margin-top:1400px;
	text-align:center;
	margin-left:auto;
	margin-right:auto;


}
.drisrar{
	float: left;
	}
	.paragraph
	{
		margin-left:210px;
		margin-right:10px;
		font-size:18px;
		color: #030;
		font-family:Georgia, "Times New Roman", Times, serif;
		line-height:30px;
		}
		.p2{
			text-align:right;
			font-weight:bold;
			color: #030;
			}
			.mess{
				border-radius:20px;
				background-color:rgb(0,153,51);
				padding:30px;
				position:absolute;
				margin-left:700px;
				}
				
				.form{
					width:400px;
					border-radius:30px;
					height: 50px;
					text-align:center;
					font-family:Georgia, "Times New Roman", Times, serif;
					font-size:18px;
					border:none;
					}
						.comment{
							border-radius:10px;
							width:400px;
							}
							.but{
								width:200px;
								height:50px;
								font-size:18px;
								border-radius:30px;
								border:none;
								font-weight:bold;
								font-family:Georgia, "Times New Roman", Times, serif;
								background-color:#030;
								color:#FFF;
							}
							.sms{
								position:absolute;
								margin-left:200px;
								margin-top:120px;
							}
							.notice{
			width:1300px;
			height:40px;
			position:absolute;
			margin-top:370px;
			text-align:center;
	
	}
	.news{
		position:absolute;
		margin-left:150px;
		background-color:#030;
		line-height:30px;
		color:white;
		border-radius:20px;
		width:100px;
		}
		.move{
			position:absolute;
			margin-left:260px;
			margin-right:150px;
			line-height:30px;
			}
			.mdes{
				text-decoration:none;
				color:red;}
					
</style>
 <!-- Font Icon -->
   <!-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">-->

    <!-- Main css -->
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
</head>
<body>
<div ID="div">
<div id="banner"><img src="images/back.jpg" width="1300" height="300"></div>
<div id="menu" class="diww" style="font-family:'Times New Roman'; font-size:40px; font-weight:bold;"><table align= "center">
<tr>
<td align="center" width="100"><a href="index.php" ><b>Home</b></a></td>
<td align="center" width="100"><a href="audio.html" ><b>Audio</b></a></td>
<td align="center" width="100"><a href="video.html" ><b>Video</b></a></td>
<td align="center" width="100"><a href="messege.php" ><b>Messege</b></a></td>
<td align="center" width="100"><a href="contact.html" ><b>Contact</b></a></td>
</tr>
</table></div>
<div id="slider"><img src="images/kalma.jpg" width="1300px" height="390px">
</div>
<div class="notice">
<div class="news"><b> NEWS </b></div>
<div class="move"><marquee scrollamount="10" direction="left" onMouseOver="stop()" onMouseOut="start()"><b>WELCOME TO ALL VIEWERS!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Books/Books.html" class="mdes"> !CLICK HERE! TO VIEW OR DOWNLOAD THE ISLAMIC BOOKS.</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ARABIC CLASSES WILL BE START FROM TOMORROW.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="quranpak.pdf" class="mdes" download> !CLICK HERE! TO DOWNLOAD QURAN PAK. </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="quran/quran.html" class="mdes"> !CLICK HERE! TO DOWNLOAD QURAN PAK IN PARAS. </a></b></marquee></div>
</div>
 <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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
 <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.png" alt="sing up image"></figure>
                        <a href="usersignup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
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
