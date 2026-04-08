<?php 
    include("header.php");  
    include("conex.php");

    $ID = $_GET['id'];
    $kuerito = "Select * from evaluacion WHERE ID_EVALUACION =".$ID;
    if($conn){
        $r = mysqli_query($conn, $kuerito);
        if($r->num_rows > 0){
            while($obj = $r->fetch_assoc()){
        $idEvaluacion = $obj["id_evaluacion"];
        $tipoEvaluacion = $obj["tipo_de_evaluacion"];
        $nombreEvaluacion = $obj["nombre_evaluacion"];
    }
}
    }
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Modificación de Evaluaciones</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Modificación de Evaluación</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaAltaMateria" method="POST" action="actualiza_evaluacion.php" >
			                    <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="hidden" class="form-control" name="idEvaluacion" value="<?php echo $idEvaluacion; ?>" >
                                        <input type="text" class="form-control" name="tipoEvaluacion" value="<?php echo $tipoEvaluacion; ?>" required>
                                        <label class="form-label">Tipo de Evaluación:</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="nombreEvaluacion" value="<?php echo $nombreEvaluacion; ?>" required>
			                            <label class="form-label">Nombre de la Evaluación:</label>
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