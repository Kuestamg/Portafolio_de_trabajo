<?php 
	include("conex.php");

	$id_ins_alumno_grupo = $_POST['grupo'];
	$calificacion= $_POST['calificacion'];


	
    $sql  = "INSERT INTO CALIFICACION (id_ins_alumno_grupo,calificacion) VALUES (".$id_ins_alumno_grupo.",".$calificacion.")";
    
	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("La calificación se ha agregado éxito.");';
		echo 'window.location="agrega_calificaciones.php";';
	echo '</script>';
		}
	}
?>
	