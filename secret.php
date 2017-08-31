<?php
require_once("database.php");
if(!isset($_SESSION["tjeklogin"])){
	echo "Du er ikke logget ind. Klik <a href=\"index.php\">her</a> for at logge ind";
} else {
?>
<!doctype html>
<html lang="da">
	<head>
		<title>Log in SYSTEM</title>
	</head>
	<body>
	<p>
		DETTE ER EN HEMMELIG SIDE FOR DEN, SOM ER LOGGET IND
	</p>
		<a href="logud.php">Log ud</a>
	</body>
</html>
<?php
	   }
?>