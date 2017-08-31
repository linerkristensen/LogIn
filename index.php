<?php
require_once("database.php");
if(isset($_POST["login"])){
	$brugernavn = $_POST["brugernavn"];
	$password = $_POST["password"];
	
	$login = mysqli_query($con, "SELECT * FROM bruger WHERE brugernavn = '{$brugernavn}' AND kodeord = '{$password}'");
	if(mysqli_num_rows($login) >= 1){
		$_SESSION["tjeklogin"] = 1;
		header("Location: secret.php");
		
	} else {
		echo "Forkert brugernavn eller kodeord";
	}
}
?>
<!doctype html>
<html lang="da">
	<head>
		<title>Log in SYSTEM</title>
	</head>
	<body>
		<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
			<input type="text" name="brugernavn" placeholder="Brugernavn">
			<input type="password" name="password" placeholder="Kodeord">
			<input type="submit" name="login" value="Log ind">
		</form>
		<a href="opret.php">Opret bruger</a>
	</body>
</html>
