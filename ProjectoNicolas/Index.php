<html>
<body>
<link rel="stylesheet" title="css14" type="text/css" href="capa/css.css">
<?php
$s=false;
include('/capa/ValidarSessio.php');
$entra=ValidarSessio();
include('/capa/Login.php');
if ($entra){
	header('Location: capa/MenuInicial.php');
}else if (isset($_POST['login'])){	
	echo("Dades incorrectes");
}
?>
</body>
</html>