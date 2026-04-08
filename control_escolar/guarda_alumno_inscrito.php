<?php 
	include("conex.php");

	$id_grupo = $_POST['grupo'];
	$id_alumno = $_POST['alumno'];

	
    $sql  = "INSERT INTO INS_ALUMNO_GRUPO (id_grupo, id_alumno) VALUES (".$id_grupo.", ".$id_alumno.")";

	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("El alumno se ha agregado al grupo con éxito.");';
		echo 'window.location="agrega_alumno_grupo.php";';
	echo '</script>';
		}
	}	
?>
	
	