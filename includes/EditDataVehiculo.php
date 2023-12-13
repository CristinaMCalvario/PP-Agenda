<?php
	require_once('conexion.php');
	

	if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])){
		
		
		$id_evento = $_POST['Event'][0];
		$inicio = $_POST['Event'][1];
		$termino = $_POST['Event'][2];

		$inicio= date('Y/m/d H:i:s', strtotime($inicio));
		$termino= date('Y/m/d H:i:s', strtotime($termino));

		$sql = "UPDATE eventvehiculo SET  fechainicio = '$inicio', fechafin = '$termino' WHERE ID = $id_evento ";

		
		if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        header("Location: ../views/calendarAuto.php");

	}
	//header('Location: '.$_SERVER['HTTP_REFERER']);
?>
