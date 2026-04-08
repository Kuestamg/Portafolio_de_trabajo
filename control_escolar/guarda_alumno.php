<?php 
	include("conex.php");

	$numeroCuenta = $_POST['numeroCuenta'];
	$nombreAlumno = $_POST['nombreAlumno'];
	$appAlumno = $_POST['appAlumno'];
	$apmAlumno = $_POST['apmAlumno'];
	$correoAlumno = $_POST['correoAlumno'];
	$sexoAlumno = $_POST['sexoAlumno'];

	
    $sql  = "INSERT INTO alumno (numero_cuenta, nombre_alumno, ap_pater_alumno, ap_mater_alumno, correo_alumno, mat_aprobada, genero_alumno) VALUES (".$numeroCuenta.",'".$nombreAlumno."','".$appAlumno."','".$apmAlumno."','".$correoAlumno."',0,'".$sexoAlumno."')";
    
	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("El Alumno '.$nombreAlumno.' '.$appAlumno.' '.$apmAlumno.' se ha agregado con éxito.");';
		echo 'window.location="agrega_alumno.php";';
	echo '</script>';
		}
	}
?>