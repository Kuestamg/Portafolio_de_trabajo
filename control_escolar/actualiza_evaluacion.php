<?php 
	include("conex.php");

	$idEvaluacion = $_POST['idEvaluacion'];
	$tipoEvaluacion = $_POST['tipoEvaluacion'];
	$nombreEvaluacion = $_POST['nombreEvaluacion'];

	
    $sql  = "UPDATE EVALUACION SET tipo_de_evaluacion = '".$tipoEvaluacion."', nombre_evaluacion = '".$nombreEvaluacion."' WHERE ID_EVALUACION = ".$idEvaluacion;
    
	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("La Evaluación '.$nombreEvaluacion.' se ha modificado con éxito.");';
		echo 'window.location="ver_evaluaciones.php";';
	echo '</script>';
		}
	}
?>