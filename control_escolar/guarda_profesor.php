<?php 
	include("conex.php");

	$nombreProfesor = $_POST['nombreProfesor'];
	$appProfesor = $_POST['appProfesor'];
	$apmProfesor = $_POST['apmProfesor'];
	$correoProfesor = $_POST['correoProfesor'];

	
    $sql  = "INSERT INTO profesor (nombre_profe, ap_pater_profe, ap_mater_profe, correo_profe) VALUES ('".$nombreProfesor."','".$appProfesor."','".$apmProfesor."','".$correoProfesor."')";
    
	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("El Profesor '.$nombreProfesor.' '.$appProfesor.' '.$apmProfesor.' se ha agregado con éxito.");';
		echo 'window.location="agrega_profesor.php";';
	echo '</script>';
		}
	}
?>