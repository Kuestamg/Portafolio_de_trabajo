<?php 
    include("header.php");  
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Alta de Calificaciones</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Alta de Calificación</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaAltaGrupo" method="POST" action="guarda_calificacion.php" >
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="grupo" id="grupo" required>
                                            <option value="">-- Selecciona una Opcion--</option>
                                            <?php 
                                                include("conex.php");
                                                 $kuerito = "SELECT * FROM INS_ALUMNO_GRUPO INNER JOIN GRUPO ON INS_ALUMNO_GRUPO.ID_GRUPO= GRUPO.ID_GRUPO INNER JOIN MATERIA ON GRUPO.ID_MATERIA = MATERIA.ID_MATERIA INNER JOIN PROFESOR ON GRUPO.ID_PROFESOR = PROFESOR.ID_PROFESOR INNER JOIN ALUMNO ON INS_ALUMNO_GRUPO.ID_ALUMNO = ALUMNO.ID_ALUMNO ";
                                                 if($conn){
                                                    $r = mysqli_query($conn, $kuerito);
                                                    if($r->num_rows > 0){
                                                        while($obj = $r->fetch_assoc()){
                                                    echo "<option value='". $obj["id_grupo"] ."'>". $obj["nombre_mat"] ." / ". $obj["nombre_profe"] ." ". $obj["ap_pater_profe"] ." ". $obj["ap_mater_profe"] ." / ". $obj["grado"] ."° ". $obj["nom_grupo"] ." / ". $obj["nombre_alumno"] ." ". $obj["ap_pater_alumno"] ." ". $obj["ap_mater_alumno"] ."</option>";
                                                }
                                            }
                                        }
                                             ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="calificacion"  maxlength="5" required>
                                        <label class="form-label">Calificacion obtenida por el Alumno:</label>
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