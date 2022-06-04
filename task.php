<?php
	$fName=$_POST["fName"];
	$lName=$_POST["lName"];
	
	$gender=$_POST["gender"];
	$email=$_POST["email"];
	$mobileNumber=$_POST["mobileNumber"];
	$adress=$_POST["adress"];
	$country=$_POST["country"];
	$check=0;
	if($fName=='')
	{
		echo "First name Empty";
		echo "<br>";
		$check=1;
	}
	if($lName=='')
	{
		echo "Last name Empty";
		$check=1;
		echo "<br>";
	}
	if($email=='')
	{
		echo "Email Empty";
		$check=1;
		echo "<br>";
	}
	if($mobileNumber=='')
	{
		echo "Mobile Number Empty";
		$check=1;
		echo "<br>";

	}
	if(isset($_POST['gender']))
	{
		
		$check=0;
		

	}
	else
	{
		echo "Gender Empty";
		$check=1;
		echo "<br>";
	}
	if($adress=='')
	{
		echo "Adress Empty";
		$check=1;
		echo "<br>";
	}
	if($country=='')
	{
		echo "Country";
		$check=1;
		echo "<br>";
	}
	if($check==0)
	{
		echo "Registration Complite";
	}

 ?>