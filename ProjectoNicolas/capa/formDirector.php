
<html>
<body>
	<link rel="stylesheet" title="css14" type="text/css" href="css.css">
	<?php
	include('MenuSuperior.php');
	?>
	<div id='form'>
	<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']?>"/>		

		Agregar Director
	</br>
</br>
NIF
<input type="text" name="nifDirecor"/>		
<br>
Nom
<input type="text" name="nomDirecor">
</br>
Descripcio
<input type="text" name="dDirecor">
</br>
<input type="submit" name="GuardarD" value="Guardar"/>
</br>
<button type="reset">Buidar</button>
</form>
</div>
</body>
</html>