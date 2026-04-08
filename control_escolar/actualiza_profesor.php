<?php 
	include("conex.php");

	$idProfesor = $_POST['idProfesor'];
	$nombreProfesor = $_POST['nombreProfesor'];
	$appProfesor = $_POST['appProfesor'];
	$apmProfesor = $_POST['apmProfesor'];
	$correoProfesor = $_POST['correoProfesor'];

	
    $sql  = "UPDATE PROFESOR SET nombre_profe ='".$nombreProfesor."', ap_pater_profe = '".$appProfesor."', ap_mater_profe = '".$apmProfesor."', correo_profe = '".$correoProfesor."' WHERE ID_PROFESOR = ".$idProfesor;
    
	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("El Profesor '.$nombreProfesor.' '.$appProfesor.' '.$apmProfesor.' se ha modificado con éxito.");';
		echo 'window.location="ver_profesores.php";';
	echo '</script>';
		}
	}
?>