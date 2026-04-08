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
                <h2>Consulta de Evaluaciones</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Consulta de Evaluación</h2>
                        </div>
                        <div class="body">
			                    <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tipoEvaluacion" value="<?php echo $tipoEvaluacion; ?>" disabled>
                                        <label class="form-label">Tipo de Evaluación:</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="nombreEvaluacion" value="<?php echo $nombreEvaluacion; ?>" disabled>
			                            <label class="form-label">Nombre de la Evaluación:</label>
			                        </div>
			                    </div>
			                  <hr>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<?php
	include("footer.php");
?>