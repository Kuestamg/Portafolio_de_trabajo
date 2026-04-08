<?php 
	include("conex.php");

	$idGrupo = $_POST['idGrupo'];
	$profesor = $_POST['profesor'];
	$materia = $_POST['materia'];
	$cicloEscolar = $_POST['cicloEscolar'];
	$grado = $_POST['grado'];
	$grupo = $_POST['grupo'];

	
    $sql  = "UPDATE grupo SET id_materia = ".$materia.", id_profesor = ".$profesor.",  ciclo_escolar = '".$cicloEscolar."', grado = '".$grado."', nom_grupo = '".$grupo."' WHERE ID_GRUPO = ".$idGrupo;
    
	if($conn){
		$r = mysqli_query($conn, $sql);
		if($r){
			echo '<script language="javascript">';
		echo 'alert("El grupo de '.$grado.'° grado, grupo '.$grupo.' se ha modificado con éxito.");';
		echo 'window.location="ver_grupos.php";';
	echo '</script>';
		}
	}
?>