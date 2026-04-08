<?php 
    include("header.php");  
?>

	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Alta Alumnos a Grupo</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Alta Alumno a Grupo</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaAltaGrupo" method="POST" action="guarda_alumno_inscrito.php" >
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="grupo" id="grupo" required>
                                            <option value="">-- Selecciona un grupo --</option>
                                            <?php 
                                                include("conex.php");
                                                $kuerito = "Select * from grupo INNER JOIN MATERIA ON GRUPO.ID_MATERIA = MATERIA.ID_MATERIA INNER JOIN PROFESOR ON GRUPO.ID_PROFESOR = PROFESOR.ID_PROFESOR ";
                                                if($conn){
                                                    $r = mysqli_query($conn, $kuerito);
                                                    if($r->num_rows > 0){
                                                        while($obj = $r->fetch_assoc()){
                                                    echo "<option value='". $obj["id_grupo"] ."'>". $obj["nombre_mat"] ." / ". $obj["nombre_profe"] ." ". $obj["ap_pater_profe"] ." ". $obj["ap_mater_profe"] ." / ". $obj["grado"] ."° ". $obj["nom_grupo"] ."</option>";
                                                }
                                            }
                                        }
                                             ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="alumno" id="alumno" required>
                                            <option value="">-- Selecciona un Alumno --</option>
                                            <?php 
                                                include("conex.php");
                                                $kuerito = "Select * from ALUMNO";
                                                if($conn){
                                                    $r = mysqli_query($conn, $kuerito);
                                                    if($r->num_rows > 0){
                                                        while($obj = $r->fetch_assoc()){
                                                    echo "<option value='". $obj["id_alumno"] ."'>". $obj["nombre_alumno"] ." ". $obj["ap_pater_alumno"] ." ". $obj ["ap_mater_alumno"] ."</option>";
                                                }
                                            }
                                        }
                                             ?>
                                        </select>
                                    </div>
                                </div>

                                <br><br><hr>
                                <button class="btn btn-primary waves-effect" type="submit">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<?php
	include("footer.php");
?>