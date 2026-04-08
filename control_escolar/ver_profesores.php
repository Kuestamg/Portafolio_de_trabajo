<?php 
    include("header.php");
?>
    <section class="content">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            	<div class="header">
				    <h2>
				        Profesor
				    </h2>
				</div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php 
                                    include("conex.php");
                                    $kuerito = "Select * from profesor";
                                    if($conn){
                                        $r = mysqli_query($conn, $kuerito);
                                        if($r->num_rows > 0){
                                            while($obj = $r->fetch_assoc()){
                                        echo " <tr> ";
                                        echo "     <th>". $obj["nombre_profe"] ."</th> ";
                                        echo "     <th>". $obj["ap_pater_profe"] ."</th> ";
                                        echo "     <th>". $obj["ap_mater_profe"] ."</th> ";
                                        echo "     <th> ";
                                        echo "         <a href='consulta_profesor.php?id=". $obj["id_profesor"] ."'><i class='material-icons'>visibility</i></a>&nbsp&nbsp  ";
                                        echo "         <a href='cambia_profesor.php?id=". $obj["id_profesor"] ."'><i class='material-icons'>description</i></a>&nbsp&nbsp  ";
                                        echo "         <a href='elimina_profesor.php?id=". $obj["id_profesor"] ."'><i class='material-icons'>delete</i></a> ";
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
