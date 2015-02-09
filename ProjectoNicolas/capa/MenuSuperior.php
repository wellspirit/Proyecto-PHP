<html>
<body>

	<div id='MenuSuperior'>
		<?php
		include('comprovarSessio.php');
		if(isset($_SESSION['user'])){
			if ($_SESSION['user']=='admin'){


				?>
			</br>
			<button type="button" onclick="location.href='formActor.php'">Registrar Actor</button>
			<button type="button" onclick="location.href='formDirector.php'">Registrar Director</button>

			<?php
		}
	}
		?>

		<div id='TancarSessio'>
			<a href='TancarSessio.php'>Tancar Sessio</a>
		</div>
	</div>

</body>
</html>