<?php 
    include("header.php"); 
    include("conex.php");

    $ID = $_GET['id'];
    $kuerito = "Select * from profesor WHERE ID_PROFESOR =".$ID;
    if($conn){
		$r = mysqli_query($conn, $kuerito);
		if($r->num_rows > 0){
			while($obj = $r->fetch_assoc()){
		$idProfesor = $obj["id_profesor"];
      	$nombreProfesor = $obj["nombre_profe"];
		$appProfesor = $obj["ap_pater_profe"];
		$apmProfesor = $obj["ap_mater_profe"];
		$correoProfesor = $obj["correo_profe"];
    }
}
	} 
?>

	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Modificación de Profesores</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Modificación de Profesor</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaAltaProfesor" method="POST" action="actualiza_profesor.php" >
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="hidden" class="form-control" name="idProfesor" value="<?php echo $idProfesor; ?>" >
			                            <input type="text" class="form-control" name="nombreProfesor" value="<?php echo $nombreProfesor; ?>" required>
			                            <label class="form-label">Nombre del Profesor:</label>
			                        </div>
			                    </div>
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="appProfesor" value="<?php echo $appProfesor; ?>" required>
			                            <label class="form-label">Apellido Paterno del Profesor:</label>
			                        </div>
			                    </div>
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="apmProfesor" value="<?php echo $apmProfesor; ?>"  required>
			                            <label class="form-label">Apellido Materno del Profesor:</label>
			                        </div>
			                    </div>
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="correoProfesor" value="<?php echo $correoProfesor; ?>" required>
			                            <label class="form-label">Correo Electrónico del Profesor:</label>
			                        </div>
			                    </div>
                                <hr>
                                <button class="btn btn-primary waves-effect" type="submit">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<?php
	include("footer.php");
?>