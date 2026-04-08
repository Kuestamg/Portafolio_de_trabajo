<?php 
    include("header.php");
?>
    <section class="content">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            	<div class="header">
				    <h2>
				        Alumnos
				    </h2>
				</div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Número de Cuenta</th>
                                    <th>Nombre</th>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Número de Cuenta</th>
                                    <th>Nombre</th>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                 <?php 
                                    include("conex.php");
                                    $kuerito = "Select * from alumno";

                                    if($conn){
                                        $r = mysqli_query($conn, $kuerito);
                                        if($r->num_rows > 0){
                                            while($obj = $r->fetch_assoc()){

                                                echo " <tr> ";
                                                echo "     <th>". $obj["numero_cuenta"] ."</th> ";
                                                echo "     <th>". $obj["nombre_alumno"] ."</th> ";
                                                echo "     <th>". $obj["ap_pater_alumno"] ."</th> ";
                                                echo "     <th>". $obj["ap_mater_alumno"] ."</th> ";
                                                echo "     <th> ";
                                                echo "         <a href='consulta_alumno.php?id=". $obj["id_alumno"] ."'><i class='material-icons'>visibility</i></a>&nbsp&nbsp  ";
                                                echo "         <a href='cambia_alumno.php?id=". $obj["id_alumno"] ."'><i class='material-icons'>description</i></a>&nbsp&nbsp  ";
                                                echo "         <a href='elimina_alumno.php?id=". $obj["id_alumno"] ."'><i class='material-icons'>delete</i></a> ";
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
