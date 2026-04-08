<?php 
    include("header.php");
?>
    <section class="content">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Calificaciones Alumnos
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Profesor</th>
                                    <th>Materia</th>
                                    <th>Alumno</th>
                                    <th>Grado</th>
                                    <th>Grupo</th>
                                    <th>Calificacion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Profesor</th>
                                    <th>Materia</th>
                                    <th>Alumno</th>
                                    <th>Grado</th>
                                    <th>Grupo</th>
                                    <th>Calificacion</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php 
                                    include("conex.php");
                                    $kuerito = "SELECT * FROM CALIFICACION INNER JOIN INS_ALUMNO_GRUPO ON CALIFICACION.ID_INS_ALUMNO_GRUPO= INS_ALUMNO_GRUPO.ID_INS_ALUMNO_GRUPO INNER JOIN GRUPO ON INS_ALUMNO_GRUPO.ID_GRUPO= GRUPO.ID_GRUPO INNER JOIN MATERIA ON GRUPO.ID_MATERIA = MATERIA.ID_MATERIA INNER JOIN PROFESOR ON GRUPO.ID_PROFESOR = PROFESOR.ID_PROFESOR INNER JOIN ALUMNO ON INS_ALUMNO_GRUPO.ID_ALUMNO = ALUMNO.ID_ALUMNO ";
                                    if($conn){
                                        $r = mysqli_query($conn, $kuerito);
                                        if($r->num_rows > 0){
                                            while($obj = $r->fetch_assoc()){
                                        echo " <tr> ";
                                        echo "     <th>". $obj["nombre_profe"] ." ". $obj["ap_pater_profe"] ." ". $obj["ap_mater_profe"] ."</th> ";
                                        echo "     <th>". $obj["nombre_mat"] ."</th> ";  
                                        echo "     <th>". $obj["nombre_alumno"] ." ". $obj["ap_pater_alumno"] ." ". $obj["ap_mater_alumno"] ."</th> ";                                     
                                        echo "     <th>". $obj["grado"] ."°</th> ";
                                        echo "     <th>". $obj["nom_grupo"] ."</th> ";
                                        echo "     <th>". $obj["calificacion"] ."</th> ";
                                        echo "     <th> ";
                                        echo "         <a href='consulta_alumno_inscrito.php?id=". $obj["id_ins_alumno_grupo"] ."'><i class='material-icons'>visibility</i></a>&nbsp&nbsp  ";
                                        echo "         <a href='cambia_alumno_inscrito.php?id=". $obj["id_ins_alumno_grupo"] ."'><i class='material-icons'>description</i></a>&nbsp&nbsp  ";
                                        echo "         <a href='elimina_alumno_inscrito.php?id=". $obj["id_ins_alumno_grupo"] ."'><i class='material-icons'>delete</i></a> ";
                                        echo "     </th> ";
                                        echo " </tr> ";
                                    }
                                }
                            }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
    include("footer.php");
?>