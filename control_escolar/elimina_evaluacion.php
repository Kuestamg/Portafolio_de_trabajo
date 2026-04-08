<?php 
	include("conex.php");

	$id = $_GET['id'];

	
    $sql  = "DELETE FROM EVALUACION WHERE ID_EVALUACION =".$id;
    if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
			echo 'alert("La evaluación se ha ELIMINADO con éxito.");';
			echo 'window.location="ver_evaluaciones.php";';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
			echo 'alert("Error al eliminar la evaluación.");';
			echo 'window.history.back();';
		echo '</script>';;
	}
?>