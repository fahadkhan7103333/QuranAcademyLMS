<?php

include 'conn.php';
if(isset($_GET ['deleteid']))
{
	$id=$_GET['deleteid'];
	
	$sql="delete from usermesseges where Serial=$id";
	$result=mysqli_query($link,$sql);
	if($result)
	{
		
		header('location:display.php');
	}
	else
	{
		die(mysqli_error($link));
	}

}

?>