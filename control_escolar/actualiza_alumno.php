<?php 
	include("conex.php");

	$idAlumno = $_POST['idAlumno'];
	$numeroCuenta = $_POST['numeroCuenta'];
	$nombreAlumno = $_POST['nombreAlumno'];
	$appAlumno = $_POST['appAlumno'];
	$apmAlumno = $_POST['apmAlumno'];
	$correoAlumno = $_POST['correoAlumno'];
	$sexoAlumno = $_POST['sexoAlumno'];

	
    $sql  = "UPDATE ALUMNO SET numero_cuenta = ".$numeroCuenta.", nombre_alumno = '".$nombreAlumno."', ap_pater_alumno = '".$appAlumno."', ap_mater_alumno = '".$apmAlumno."', correo_alumno = '".$correoAlumno."', genero_alumno = '".$sexoAlumno."' WHERE ID_ALUMNO = ".$idAlumno;
    
	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("El Alumno '.$nombreAlumno.' '.$appAlumno.' '.$apmAlumno.' se ha modificado con éxito.");';
		echo 'window.location="ver_alumnos.php";';
	echo '</script>';
		}
	}
?>