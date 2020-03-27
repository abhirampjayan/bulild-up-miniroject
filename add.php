<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<div id="container">
		<div id="log">
			<div id=pro><img src="IMG_20161028_224947.jpg"><h3>Thaks For Joining to our Portal!</h3></div>
			<form method="post" action="add.php">
				<?php
				$uname="root";
				$passwd="";
				$serv="localhost";
				$db="bu";
$user=$_POST['uname'];
$email=$_POST['email'];
$paswd=$_POST['paswd'];
$conn=mysqli_connect($serv,$uname,$passwd,$db);
	if(!$conn)
	{
		die("<h2>connection Failed : ".mysqli_connect_error()."</h2>");
	}
$q="INSERT INTO `user`(`email`, `password`, `username`) VALUES ('$email','$paswd','$user')";
if($conn->query($q)===TRUE)
{
	echo"<h2>Record created successfully</h2>";
}
else
{
	echo"<h2>Unsuccessful</h2>";
}
				?>
			</form>
		</div><br>
			
		</div>	
		<footer><p>Created By Abhiram P Jayan | Targaryen Family ( 2016-2020 )</p></footer>
	</body>
</html>