<?php
session_start();

if((isset($_SESSION['psw']))&&($_SESSION['user'])){

	session_unset();
	?>
	sessio tancada
	<br>
	<a href='../Index.php'>Index</a>
	<?php

}else{
	echo("Error no hi ha sessio");
}



?>