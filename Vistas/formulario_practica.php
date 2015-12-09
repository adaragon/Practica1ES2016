<?php 
$fecha_actual = date('Y-m-d');//obtiene la fecha actual
include_once "funciones_formulario.php"; 
include_once "provincias.php";
$Provincias=Provincias();
?>
<html>
	<head>
		<meta charset="utf-8">
	</head>
<body>
<h1>Añadir nueva tarea</h1>
<form ACTION="funciones_formulario.php" METHOD="POST">

<p>Nombre: <INPUT TYPE="text" NAME="nombre" SIZE="20" style=<?php if(isset($errores["nombre"])){echo"border-color:red";}  ?>>
<?php if(isset($errores["nombre"]))echo $errores["nombre"] ?></p>

<p>Apellidos: <INPUT TYPE="text" NAME="apellidos" SIZE="20" style=<?php if(isset($errores["apellidos"])){echo"border-color:red";}?>>
<?php if(isset($errores["apellidos"]))echo $errores["apellidos"] ?></p>

<p>Descripción de tarea: <INPUT TYPE="text" NAME="descripcion" SIZE="20" style=<?php if(isset($errores["descripcion"])){echo"border-color:red";}?>>
<?php if(isset($errores["descripción"]))echo $errores["descripción"] ?></p>

<p>Tlfo. de Contacto: <INPUT TYPE="text" NAME="telefono" SIZE="20" style=<?php if(isset($errores["telefono"])){echo"border-color:red";}?>>
<?php if(isset($errores["telefono"]))echo $errores["telefono"] ?></p>

<p>Correo electrónico: <INPUT TYPE="text" NAME="email" SIZE="20" style=<?php if(isset($errores["email"])){echo"border-color:red";}?>>
<?php if(isset($errores["email"]))echo $errores["email"] ?></p>

<p>Dirección: <INPUT TYPE="text" NAME="direccion" SIZE="20" style=<?php if(isset($errores["direccion"])){echo"border-color:red";}?>>
<?php if(isset($errores["direccion"]))echo $errores["direccion"] ?></p>

<p>Población: <INPUT TYPE="text" NAME="poblacion" SIZE="20" style=<?php if(isset($errores["poblacion"])){echo"border-color:red";}?>>
<?php if(isset($errores["poblacion"]))echo $errores["poblacion"] ?></p>

<p>Código Postal: <INPUT TYPE="text" NAME="cp" SIZE="20" style=<?php if(isset($errores["cp"])){echo"border-color:red";}?>>
<?php if(isset($errores["cp"]))echo $errores["cp"] ?></p>

<p>Provincia:<?=CreaSelect('tbl_provincias_cod', $Provincias, $valorDefecto='');?></p>

<p>Fecha de creación: <INPUT TYPE="date" NAME="fecha_cre" SIZE="20" value=<?= $fecha_actual?> readonly></p>

<p>Operario encargado: <INPUT TYPE="text" NAME="operario" SIZE="20" style=<?php if(isset($errores["operario"])){echo"border-color:red";}?>></p>

<p>Fecha de realización: <INPUT TYPE="date" NAME="fecha_re" SIZE="20" style=<?php if(isset($errores["fecha_re"])){echo"border-color:red";}?>>
<?php if(isset($errores["fecha_re"]))echo $errores["fecha_re"] ?></p>

<p>Anotaciones anteriores: <INPUT TYPE="text" NAME="an_anterior" SIZE="20"></p>

<p>Anotaciones posteriores: <INPUT TYPE="text" NAME="an_posterior" SIZE="20"></p>

<p><input name="enviar" type="submit" value="Enviar datos"></p>
</form>
</body>
</html>
