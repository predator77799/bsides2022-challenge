<?php
	include("db.php");
	$flag = 0;

	if(isset($_SESSION['username'])){
		header("Location: dashboard.php");
	}

	if($_SERVER['REQUEST_METHOD']=='POST') {
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$sql = "SELECT * FROM login WHERE username='".$username."' AND password='".$password."'";
		if ($conn->query($sql) === TRUE) {
			$flag = 1;
		} else {
			$flag = 2;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login Form</title>
</head>

<body>
  <div class="box">
    <form action="" method="POST"> 
    <div class="form">
      <h2>Sign in</h2>
      <div class="inputBox">
        <input type="text" name="username" required="required">
        <span>Username</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" name="password" required="required">
        <span>Password</span>
        <i></i>
      </div>
      <?php
		if($flag===1){
			echo "Login successful";
		}

		if($flag===2){
			echo "Login failed";
		}
      ?>
      <input type="submit" value="Login">
    </div>
    </form>
  </div>
</body>

</html>
