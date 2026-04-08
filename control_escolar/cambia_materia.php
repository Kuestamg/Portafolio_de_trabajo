<?php 
    include("header.php");   
    include("conex.php");

    $ID = $_GET['id'];
    $kuerito = "Select * from MATERIA WHERE ID_MATERIA = ".$ID;
    if($conn){
        $r = mysqli_query($conn, $kuerito);
        if($r->num_rows > 0){
            while($obj = $r->fetch_assoc()){
        $idMateria = $obj["id_materia"];
        $nombreMateria = $obj["nombre_mat"];    
            }        
    }
}
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Modificación de Materias</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Modificación de Materia</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaAltaMateria" method="POST" action="actualiza_materia.php" >
			                    <div class="form-group form-float">
			                        <div class="form-line">
                                        <input type="hidden" class="form-control" name="idMateria"  value="<?php echo $idMateria; ?>">
			                            <input type="text" class="form-control" name="nombreMateria" required value="<?php echo $nombreMateria; ?>">
			                            <label class="form-label">Nombre de la Materia:</label>
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