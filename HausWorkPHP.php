<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<p>
<?php
$ok = true;
if ($ok) {
	# code...
	$db = mysqli_connect("localhost", "root", "", "php");
	$sql = sprintf("INSERT INTO vacantes (nombre, apellido, correo, telefono, genero, vacante, curriculum) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s'
		)", mysqli_real_escape_string($db, ($_POST["nombre"])),
			mysqli_real_escape_string($db, ($_POST["apellido"])),
			mysqli_real_escape_string($db, ($_POST["correo"])),
			mysqli_real_escape_string($db, ($_POST["telefono"])),
			mysqli_real_escape_string($db, ($_POST["genero"])),
			mysqli_real_escape_string($db, ($_POST["vacante"])),
			mysqli_real_escape_string($db, ($_POST["curriculum"])));
		mysqli_query($db, $sql);
		mysqli_close($db);
		echo "<p> User added </p>";

	if (isset($_POST['submit'])) {
		printf('Nombre: %s
		<br> Apellido: %s
		<br> Correo: %s
		<br> Teléfono: %s
		<br> Género: %s
		<br> Vacante de interés: %s
		<br> CV: %s',
			htmlspecialchars($_POST["nombre"]),
			htmlspecialchars($_POST["apellido"]),
			htmlspecialchars($_POST["correo"]),
			htmlspecialchars($_POST["telefono"]),
			htmlspecialchars($_POST["genero"]),
			htmlspecialchars($_POST["vacante"]),
			htmlspecialchars($_POST["curriculum"]));
	}
}

?>
</p>
</body>
</html>
