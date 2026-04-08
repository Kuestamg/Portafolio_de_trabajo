<?php 
    include("header.php");
    $grado = $_POST['grado'];
    $grupo = $_POST['grupo'];
    $cicloEscolar = $_POST['cicloEscolar'];
?>
    <section class="content">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            	<div class="header">
				    <h2>
				       Reporte profesores y alumnos
				    </h2>
				</div>
                <br>
                <h5 align="center">Resultados para el Grado: <?php echo $grado;?>, Grupo: <?php echo $grupo;?> y el Ciclo Escolar: <?php echo $cicloEscolar;?></h5>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Profesor</th>
                                    <th>Alumno</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Profesor</th>
                                    <th>Alumno</th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                 <?php 
                                    include("conex.php");
                                    $kuerito = "SELECT CONCAT(NOMBRE_PROFE, CONCAT(' ',CONCAT(AP_PATER_PROFE,CONCAT(' ',AP_MATER_PROFE)))) AS PROFESOR, CONCAT(NOMBRE_ALUMNO,CONCAT(' ',CONCAT(AP_PATER_ALUMNO,CONCAT(' ',AP_MATER_ALUMNO)))) AS ALUMNO FROM INS_ALUMNO_GRUPO INNER JOIN GRUPO ON INS_ALUMNO_GRUPO.ID_GRUPO = GRUPO.ID_GRUPO INNER JOIN PROFESOR ON GRUPO.ID_PROFESOR = PROFESOR.ID_PROFESOR INNER JOIN ALUMNO ON INS_ALUMNO_GRUPO.ID_ALUMNO = ALUMNO.ID_ALUMNO WHERE GRADO = ".$grado." AND NOM_GRUPO = '".$grupo."' AND CICLO_ESCOLAR = ".$cicloEscolar;
                                    $stid = oci_parse($conn, $kuerito);
                                    $r = oci_execute($stid);
                                    while( ($obj = oci_fetch_object($stid)) != false ){
                                        echo " <tr> ";
                                        echo "     <th>".$obj->PROFESOR."</th> ";
                                        echo "     <th>".$obj->ALUMNO."</th> ";  
                                        echo " </tr> ";
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
