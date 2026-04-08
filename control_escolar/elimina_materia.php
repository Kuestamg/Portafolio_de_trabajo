<?php 
	include("conex.php");

	$id = $_GET['id'];

	
    $sql  = "DELETE FROM MATERIA WHERE ID_MATERIA =".$id;
    if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
			echo 'alert("La Materia se ha ELIMINADO con éxito.");';
			echo 'window.location="ver_materias.php";';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
			echo 'alert("Error al eliminar la Materia.");';
			echo 'window.history.back();';
		echo '</script>';
	}
?>