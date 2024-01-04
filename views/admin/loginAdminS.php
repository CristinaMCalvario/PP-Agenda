<?php

if(!empty($_POST)){
	if(isset($_POST["uname"]) &&isset($_POST["passcampo"])){
		if($_POST["uname"]!=""&&$_POST["passcampo"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from usuario where correo=\"$_POST[uname]\" and password=\"$_POST[passcampo]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["ID"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='loginAdmin.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='dashboardAdmin.php';</script>";				
			}
		}
	}
}



?>