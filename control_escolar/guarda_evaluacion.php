<?php 
	include("conex.php");

	$tipoEvaluacion = $_POST['tipoEvaluacion'];
	$nombreEvaluacion = $_POST['nombreEvaluacion'];

	
    $sql  = "INSERT INTO evaluacion (tipo_de_evaluacion, nombre_evaluacion) VALUES ('".$tipoEvaluacion."','".$nombreEvaluacion."')";

	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("La Evaluación '.$nombreEvaluacion.' se ha agregado con éxito.");';
		echo 'window.location="agrega_evaluacion.php";';
	echo '</script>';
		}
	}
?>