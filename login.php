<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<div id="container">
		<div id="log">
			<div id=pro><img src="IMG_20161028_224947.jpg"><h3>Welcome to Your Portal!</h3></div>
			<form method="post" action="login.php">
				<?php
$uname="root";
$passwd="";
$serv="localhost";
$db="bu";
$user=$_POST['uname'];
$paswd=$_POST['paswd'];
$conn=mysqli_connect($serv,$uname,$passwd,$db);
	if(!$conn)
	{
		die("<h2>connection Failed : ".mysqli_connect_error()."</h2>");
	}
$q="SELECT * FROM user WHERE username='$user' AND password='$paswd'";
$r=mysqli_query($conn,$q);
$d=mysqli_fetch_array($r);
if(!$d)
{
	echo "<h2>Account not found</h2>";
	exit();
}
elseif($d['username']==$user && $d['password']==$paswd)
{
	echo"<h2>Login successfull...</h2>";
}
		echo "Your Email is : ".$d['email'];
				mysqli_close($conn);
?>
			</form>
		</div><br>
			
		</div>	
		<footer><p>Created By Abhiram P Jayan | Targaryen Family ( 2016-2020 )</p></footer>
	</body>
</html>
