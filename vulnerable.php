<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Página Vulnerable</h1>

	<?php
		session_start();
		include ("includes/autenticado.php");
		include ("includes/abrirbd.php");
		echo "<title>Blind SQL Injection Test ­</title>";
		$sql = "SELECT * FROM usuarios WHERE id_user = ".$_GET['id'];
		$resultado = mysqli_query($link, $sql);
		if (mysqli_num_rows($resultado) == 0) {
		die('No hay columnas');
		}
		$fila = mysqli_fetch_assoc($resultado);
		echo "<b>IdUsuario: </b>". $fila['id_user']. "<br>"; 
		echo "<b>Permiso:  </b>". $fila['permisos']. "<br>"; 
		echo "<b>Nombre:  </b>". $fila['nombres']. "<br>"; 
		echo "<b>Apellido:  </b>". $fila['apellidos']. "<br>"; 



		
		
		
		
	?>
</body>
</html>