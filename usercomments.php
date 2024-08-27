 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<?php
$login=true;
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    <?php
include 'conn.php';
if(isset($_POST['submit']))
{
	$FullName = $_POST['uname'];
	$UserEmail = $_POST['uemail'];
	$PhoneNumber = $_POST['unumber'];
	$Messege = $_POST['ucomment'];
	   //insertion of data
    $sql="INSERT INTO usermesseges(`Name`,`Email`,`MobileNo`,`Messege`) VALUES ('$FullName','$UserEmail','$PhoneNumber','$Messege')";	   
	$result = mysqli_query($link,$sql);
	if($result)
	{
		echo '<script>alert("Messege Sent Successfully")</script>';
	}
	else
	{
		die(mysqli_error($link));
	}
}
?>
<!DOCTYPE>
<html>
<head>
<title> Welcome - <?php echo $_SESSION['username']?> </title>
<style>
.diww a{
	color:white;}
.diww a:link
{
	text-decoration:none;
	color:white;
	background-color: #030;
	font-size:20px;
	border-radius:30px;
	text-align:center;
	width:100px;
	height:40px;
	line-height:40px;
	display: block;
}
.diww a:hover
{
	text-decoration:none;
	color:white;
	background-color: #030;
	font-size:20px;
	border-radius:30px;
	text-align:center;
	width:100px;
	height:40px;
	line-height:40px;
	display: block;
}
.diww a:active
{
	text-decoration:none;
	color:white;
	background-color: #030;
	font-size:20px;
	border-radius:30px;
	text-align:center;
	width:100px;
	height:40px;
	line-height:40px;
	display: block;
}

#div
{
	width:1300px;
	height:950px;
	margin-left:auto;
	margin-right:auto;

}
.p2{
			text-align:right;
			font-weight:bold;
			color: #030;}
#menu
{
	width:1300px;
	height:60px;
	position:absolute;
	margin-top:10px;
	font-weight:bold;
	color:#FFF;
	line-height:100px;
	text-align:center;

}
#content
{
	width:1250px;
	height:650px;
	position:absolute;
	margin-top:50px;
	margin-left:auto;
	margin-right:auto;
}
#footer
{
	width:1300px;
	height:100px;
	position:absolute;
	margin-top:850px;
	text-align:center;
	margin-left:auto;
	margin-right:auto;


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
</style>
</head>
<body>
<div ID="div">
<div id="menu" class="diww"><table align= "right">
<tr>
<td align="center" width="100"><a href="logout.php"><b>Logout</b></a></td>
</tr>
</table></div>
<div id="content">
<div class="mess">
<h1 align="center";><font color="white">Leave Messege</font></h1>
<form method="post">
<input type="text" placeholder="Please Enter Your Full Name" maxlength="30" class="form" name="uname" required><br><br><br>
<input type="email" placeholder="Please Enter Your Email Address" maxlength="30" class="form" name="uemail" required><br><br><br>
<input type="number" placeholder="Please Enter Your Mobile Number" maxlength="30" class="form" name="unumber" required><br><br><br>
<textarea placeholder="Please Write Your Messege......." rows="10" cols="21" class="comment" name="ucomment" required></textarea><br><br><br>
<input type="submit" class="but" name="submit">
<input type="reset" class="but">
</form>
</div>
<div class="sms"><img src="images/sms.jpg" width="400px" height="400px"></div>
</div>
<div id="footer"><p class="p2">&copy;2022 All Rights Reserved &reg; Muhammad Fahd Rafique Khan</p>
<p class="p2"> Contact#03055444774		E.mail# m.fahdrafiquekhan@gmail.com</p>
</div>
</div>
</body>
</html>
