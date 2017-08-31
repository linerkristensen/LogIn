<?php
require_once("database.php");
if(!isset($_SESSION["tjeklogin"])){
	echo "Du er ikke logget ind. Klik <a href=\"index.php\">her</a> for at logge ind";
} else {
	session_destroy();
	header("Location: index.php");
}
?>