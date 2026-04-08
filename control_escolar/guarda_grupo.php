<?php 
	include("conex.php");

	$profesor = $_POST['profesor'];
	$materia = $_POST['materia'];
	$cicloEscolar = $_POST['cicloEscolar'];
	$grado = $_POST['grado'];
	$grupo = $_POST['grupo'];

	
    $sql  = "INSERT INTO grupo (id_materia, id_profesor,  ciclo_escolar, grado, nom_grupo) VALUES (".$materia.", ".$profesor.",'".$cicloEscolar."','".$grado."','".$grupo."')";
    
	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("El grupo de '.$grado.'° grado, grupo '.$grupo.' se ha agregado con éxito.");';
		echo 'window.location="agrega_grupo.php";';
	echo '</script>';
		}
	}
?>