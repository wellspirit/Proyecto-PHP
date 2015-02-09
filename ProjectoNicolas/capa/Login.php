<html>
<body>
	<div id='login'>
		<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']?>"/>		

			Usuari
			<?php
			if (isset($_COOKIE['user'])) {
				?>
				<input type="text" name="user" value="<?php echo $_COOKIE['user']; ?>"/>
				<?php
			} else {
				?>
				<input type="text" name="user">
				<?php
			}
			?>
			<br>
			Password
			<?php
			if (isset($_COOKIE['psw'])) {
				?>

				<input type="password" name="psw" value="<?php echo $_COOKIE['psw']; ?>">
				<?php
			} else {
				?>
				<input type="password" name="psw">
				<?php
			}
			?>						
			<br>
			<input type="submit" name="login" value="Inici Sessio"/>
			<br>

			<input type="checkbox" name="cuser" <?php if (isset($_COOKIE['user'])){ echo("checked"); } ?>/>
			Guardar Usuari
			<br>

			<input type="checkbox" name="cpsw" <?php if (isset($_COOKIE['psw'])){ echo("checked"); }?>/>
			Guardar Contrassenya
		</form>
	</div>
</body>
</html>