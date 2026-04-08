<?php 
	include("conex.php");

	$nombreMateria = $_POST['nombreMateria'];

	
    $sql  = "INSERT INTO materia (nombre_mat) VALUES ('".$nombreMateria."')";
    
	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("La Materia '.$nombreMateria.' agregado con éxito.");';
		echo 'window.location="agrega_materia.php";';
	echo '</script>';
		}
	}	
?>