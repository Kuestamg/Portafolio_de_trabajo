<?php 
    include("header.php");
?>
    <section class="content">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            	<div class="header">
				    <h2>
				        Evaluaciones
				    </h2>
				</div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <!-- <th>ID Evaluación</th> -->
                                    <th>Tipo de Evaluación</th>
                                    <th>Nombre de la Evaluación</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <!-- <th>ID Evaluación</th> -->
                                    <th>Tipo de Evaluación</th>
                                    <th>Nombre de la Evaluación</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php 
                                    include("conex.php");
                                    $kuerito = "Select * from evaluacion";
                                    if($conn){
                                        $r = mysqli_query($conn, $kuerito);
                                        if($r->num_rows > 0){
                                            while($obj = $r->fetch_assoc()){
                                        echo " <tr> ";
                                        // echo "     <th>".$obj->ID_EVALUACION."</th> ";
                                        echo "     <th>". $obj["tipo_de_evaluacion"] ."</th> ";
                                        echo "     <th>". $obj["nombre_evaluacion"] ."</th> ";
                                        echo "     <th> ";
                                        echo "         <a href='consulta_evaluacion.php?id=". $obj["id_evaluacion"] ."'><i class='material-icons'>visibility</i></a>&nbsp&nbsp  ";
                                        echo "         <a href='cambia_evaluacion.php?id=". $obj["id_evaluacion"] ."'><i class='material-icons'>description</i></a>&nbsp&nbsp  ";
                                        echo "         <a href='elimina_evaluacion.php?id=". $obj["id_evaluacion"] ."'><i class='material-icons'>delete</i></a> ";
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