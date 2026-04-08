<?php 
	include("conex.php");

	$id = $_POST['idGrupoIns'];
	$id_grupo = $_POST['grupo'];
	$id_alumno = $_POST['alumno'];

	
    $sql  = "UPDATE INS_ALUMNO_GRUPO SET id_grupo = ".$id_grupo.", id_alumno = ".$id_alumno." WHERE ID_INS_ALUMNO_GRUPO = ".$id;
    
	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("El alumno se ha modificado al grupo con éxito.");';
		echo 'window.location="ver_alumno_grupo.php";';
	echo '</script>';
		}
	}
?>