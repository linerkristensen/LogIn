<?php
require_once("database.php");
if(isset($_POST["opret"])){
	$brugernavn = $_POST["brugernavn"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	
	mysqli_query($con, "INSERT INTO bruger (brugernavn, kodeord, email) VALUES ('{$brugernavn}','{$password}','{$email}')");
	echo "Bruger oprettet";
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
			<input type="email" name="email" placeholder="Email">
			<input type="submit" name="opret" value="Opret">
		</form>
	</body>
</html>
