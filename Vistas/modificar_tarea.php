<html>
<body>
<h1>Modificar tarea</h1>
<form ACTION="funciones_formulario.php" METHOD="POST">
<p>Nombre: <INPUT TYPE="text" NAME="nombre" SIZE="20"  style=<?php if(isset($errores["nombre"])){echo"border-color:red";}  ?>>
<?php if(isset($errores["nombre"]))echo $errores["nombre"] ?></p>

<p>Apellidos: <INPUT TYPE="text" NAME="apellidos" SIZE="20" style=<?php if(isset($errores["apellidos"])){echo"border-color:red";}?>>
<?php if(isset($errores["apellidos"]))echo $errores["apellidos"] ?></p>

<p>Descripci�n de tarea: <INPUT TYPE="text" NAME="descripci�n" SIZE="20" style=<?php if(isset($errores["descripci�n"])){echo"border-color:red";}?>>
<?php if(isset($errores["descripci�n"]))echo $errores["descripci�n"] ?></p>

<p>Tlfo. de Contacto: <INPUT TYPE="text" NAME="telefono" SIZE="20" style=<?php if(isset($errores["telefono"])){echo"border-color:red";}?>>
<?php if(isset($errores["telefono"]))echo $errores["telefono"] ?></p>

<p>Correo electr�nico: <INPUT TYPE="text" NAME="email" SIZE="20" style=<?php if(isset($errores["email"])){echo"border-color:red";}?>>
<?php if(isset($errores["email"]))echo $errores["email"] ?></p>

<p>Direcci�n: <INPUT TYPE="text" NAME="direccion" SIZE="20" style=<?php if(isset($errores["direccion"])){echo"border-color:red";}?>>
<?php if(isset($errores["direccion"]))echo $errores["direccion"] ?></p>

<p>Poblaci�n: <INPUT TYPE="text" NAME="poblacion" SIZE="20" style=<?php if(isset($errores["poblacion"])){echo"border-color:red";}?>>
<?php if(isset($errores["poblacion"]))echo $errores["poblacion"] ?></p>
<p>C�digo Postal: <INPUT TYPE="text" NAME="cp" SIZE="20" style=<?php if(isset($errores["cp"])){echo"border-color:red";}?>>
<?php if(isset($errores["cp"]))echo $errores["cp"] ?></p>
<p>
	Estado: <select name="estado">
				<option value="pendiente">Pendiente</option>
				<option value="realizada">Realizada</option>
				<option value="cancelada">Cancelada</option>
				<option value="otro">Otro</option>
	   		</select>
</p>

<p>Fecha de creaci�n: <INPUT TYPE="date" NAME="fecha_cre" SIZE="20" value=<?= $fecha_actual?> readonly></p>
<p>Operario encargado: <INPUT TYPE="text" NAME="operario" SIZE="20" style=<?php if(isset($errores["direccion"])){echo"border-color:red";}?>></p>
<p>Fecha de realizaci�n: <INPUT TYPE="date" NAME="fecha_re" SIZE="20" style=<?php if(isset($errores["fecha_re"])){echo"border-color:red";}?>>
<?php if(isset($errores["fecha_re"]))echo $errores["fecha_re"] ?></p>

<p>Anotaciones anteriores: <INPUT TYPE="text" NAME="an.anterior" SIZE="20" style=<?php if(isset($errores["an.anterior"])){echo"border-color:red";}?>>
<?php if(isset($errores["an.anterior"]))echo $errores["an.anterior"] ?></p>

<p>Anotaciones posteriores: <INPUT TYPE="text" NAME="an.posterior" SIZE="20" style=<?php if(isset($errores["an.posterior"])){echo"border-color:red";}?>>
<?php if(isset($errores["an.posterior"]))echo $errores["an.posterior"] ?></p>

<p><input name="enviar" type="submit" value="Enviar datos"></p>
</form>
</body>
</html>
