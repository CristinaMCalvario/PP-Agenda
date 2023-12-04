<?php
	
	$servername = "localhost";
	$database = "agendapp";
	$username = "root";
	$password = "1234";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	echo "Connected successfully";


    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $departamento = $_POST["departamento"];
    $cargo = $_POST["cargo"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $rol = $_POST["rol"];
    $username = $_POST["username"];
    $password = $_POST["pass"];

	$sql = "INSERT INTO usuario(nombre,apellidos,departamento,cargo,correo,telefono,username,password,rol) 
			VALUES ('$nombre', '$apellidos','$departamento','$cargo','$correo','$telefono','$username','$password','$rol')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

?>