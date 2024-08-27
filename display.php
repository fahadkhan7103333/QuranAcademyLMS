 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: adminlogin.php");
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
<!DOCTYPE>
<html>
<head>
<title> Admin Portal </title>
<style>
.d{
	background-image: url(images/admin.jpg);
	 box-sizing: border-box;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  opacity:0.3px;
  background-size: cover;}
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
	width:1350px;
	margin-left:auto;
	margin-right:auto;

}
.p2{
			text-align:right;
			font-weight:bold;
			color: white;
			margin-right:5px;}
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
	width:1340px;
	height:65px;
	position:fixed;
	text-align: center;
	margin-left:auto;
	margin-right:auto;
bottom: 2px;
background-color:#030;
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
							.butdel{
								width:60px;
								height:30px;
								font-size:12px;
								border-radius:10px;
								border:none;
								font-weight:bold;
								font-family:Georgia, "Times New Roman", Times, serif;
								background-color:#030;
								color:white;
							}
							.sms{
								position:absolute;
								margin-left:200px;
								margin-top:120px;
							}
							.tab{
								width:1200px;
								text-align:center;
								margin-left:auto;
								margin-right:auto;
								font-weight:bold;
								border-color:#030;
								border-style: solid;
								}
								.tabl{
								width:1000px;
								text-align:justify;
								margin-left:auto;
								margin-right:auto;
								height:50px;
								font-weight:bold;
								border-color:#030;
								border-style: solid;
								}

</style>
</head>
<body class="d">
<div ID="div">
<div id="menu" class="diww"><table align= "right" >
<tr>
<td align="center" width="100"><a href="logout.php"><b>Logout</b></a></td>
</tr>
</table></div>
<div id="content">
<font color= "#030" size="30"><center><b>User Messeges & Details</b></center></font>
<table class="tab">
<tr class="tabl">
<th width="50px">Sr#</th><th width="250px">Name</th><th width="250px">Email</th><th width="150px">Phone No</th>
<th width="450px">Messege</th><th width="50px">Delete</th>
</tr>

<?php
include 'conn.php';
$sql="SELECT * FROM usermesseges";
$result=mysqli_query($link,$sql);	
if($result) {
while($row=mysqli_fetch_array($result))
{
	$id=$row['Serial'];
	$Fname = $row['Name'];
	$email = $row['Email'];
	$mobileno=$row['MobileNo'];
	$messege=$row['Messege']; 

	echo '<tr class="tabl">
	<th width="50px"> '.$id.'</th>
	<td width="250px">'.$Fname.'</td>
	<td width="250px">'.$email.'</td>
	<td width="150px">'.$mobileno.'</td>
	 <td width="450px">'.$messege.'</td> 
	 <td width="50px"><button class="butdel"><a href="delete.php?deleteid='.$id.'" class="butdel">Delete</a></button></td>
	</tr>';

	}



}
?>
</table>
<br><br><br>
<br><br><br>
<br><br><br>
</div>

<div id="footer"><p class="p2">&copy;2022 All Rights Reserved &reg; Muhammad Fahd Rafique Khan</p>
<p class="p2"> Contact#03055444774		E.mail# m.fahdrafiquekhan@gmail.com</p>
</div>
</div>
</body>
</html>
