<?php
session_start();
if((isset($_SESSION['psw']))&&($_SESSION['user'])){	

	echo("Nom Usuari: ");
	echo($_SESSION['user']);
	
	
}else{
	?>
	<h1>NO HI HA SESSIO</h1>
</br>
<a href='../Index.php'>Tornar</a>
<?php
}
?>