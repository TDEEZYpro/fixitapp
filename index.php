<?php

$host="localhost";
$user="root";
$password="";
$db="fixit user";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
  die("Connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $username=$_POST["username"];
  $password=$_POST["psword"];

  $sql="select * from login where username= '".$username."' AND password= '".$password."'";

  $result=mysqli_query($data,$sql);

  $row=mysqli_fetch_array($result);

  if($row["usertype"]=="user")
  {
    $_SESSION["username"]=$username;
      header("location:Pages/userhome.php");
  }
  else if($row["usertype"]=="admin")
  {
    $_SESSION["username"]=$username;
    header("location:Pages/adminhome.php");
  }
  else
  {
    echo"Username or password incorrect";
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Sign up</label>

						<input type="text" placeholder="Student Number" required="">

						<input type="text" name="username" placeholder="Surname" required="">

						<input type="text" placeholder="Initials" required="">

						<input type="email" name="email" placeholder="Email" required="">

						<input type="password" name="psword" placeholder="Password" required="">

						<input type="text" placeholder="Confirm Password" required="">

					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="#" method="POST">
					<label for="chk" aria-hidden="true">Login</label>

						<input type="text" name="username" required>
						<input type="password" name="psword" placeholder="Password" required>
					<button type="submit" value="Login">Login</button>
				</form>
			</div>
	</div>
</body>
</html>