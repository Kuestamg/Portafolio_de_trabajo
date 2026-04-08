<?php 
	include("conex.php");

	$idMateria = $_POST['idMateria'];
	$nombreMateria = $_POST['nombreMateria'];

	
    $sql  = "UPDATE MATERIA SET nombre_mat = '".$nombreMateria."' WHERE ID_MATERIA = ".$idMateria;
    
	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("La Materia '.$nombreMateria.' se ha actualizado con éxito.");';
		echo 'window.location="ver_materias.php";';
	echo '</script>';
		}
	}	
?>