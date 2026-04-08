<?php 
    include("header.php");
?>
    <section class="content">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            	<div class="header">
				    <h2>
				        Grupos
				    </h2>
				</div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Profesor</th>
                                    <th>Materia</th>
                                    <th>Ciclo Escolar</th>
                                    <th>Grado</th>
                                    <th>Numero de Grupo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Profesor</th>
                                    <th>Materia</th>
                                    <th>Ciclo Escolar</th>
                                    <th>Grado</th>
                                    <th>Numero de Grupo</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php 
                                    include("conex.php");
                                    $kuerito = "SELECT * FROM GRUPO INNER JOIN PROFESOR ON GRUPO.ID_PROFESOR = PROFESOR.ID_PROFESOR INNER JOIN MATERIA ON GRUPO.ID_MATERIA = MATERIA.ID_MATERIA";
                                    if($conn){
                                        $r = mysqli_query($conn, $kuerito);
                                        if($r->num_rows > 0){
                                            while($obj = $r->fetch_assoc()){
                                        echo " <tr> ";
                                        echo "     <th>". $obj["nombre_profe"] ." ". $obj["ap_pater_profe"] ." ". $obj["ap_mater_profe"] ."</th> ";
                                        echo "     <th>". $obj["nombre_mat"] ."</th> ";
                                        switch ($obj["ciclo_escolar"]) {
                                            case '2020':
                                                echo "     <th>2020 - 2021</th> ";
                                                break;
                                            case '2021':
                                                echo "     <th>2021 - 2022</th> ";
                                                break;
                                            case '2022':
                                                echo "     <th>2022 - 2023</th> ";
                                                break;
                                            default:
                                                echo "     <th></th> ";
                                                break;
                                        }                                        
                                        echo "     <th>". $obj["grado"] ."°</th> ";
                                        echo "     <th>". $obj["nom_grupo"] ."</th> ";
                                        echo "     <th> ";
                                        echo "         <a href='consulta_grupo.php?id=". $obj["id_grupo"] ."'><i class='material-icons'>visibility</i></a>&nbsp&nbsp  ";
                                        echo "         <a href='cambia_grupo.php?id=". $obj["id_grupo"] ."'><i class='material-icons'>description</i></a>&nbsp&nbsp  ";
                                        echo "         <a href='elimina_grupo.php?id=". $obj["id_grupo"] ."'><i class='material-icons'>delete</i></a> ";
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