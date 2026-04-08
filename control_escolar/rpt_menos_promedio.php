<?php 
    include("header.php");
    $cicloEscolar = $_POST['cicloEscolar'];
?>
    <section class="content">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            	<div class="header">
				    <h2>
				       Reporte grupo con menor promedio
				    </h2>
				</div>
                <BR>
                <h5 align="center">Resultados para el Ciclo Escolar: <?php echo $cicloEscolar;?></h5>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Grado</th>
                                    <th>Grupo</th>
                                    <th>Promedio</th>
                                    <th>Profesor</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Grado</th>
                                    <th>Grupo</th>
                                    <th>Promedio</th>
                                    <th>Profesor</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                 <?php 
                                    include("conex.php");
                                    for ($i=1; $i <= 6; $i++) { 
                                        $kuerito = "SELECT CONCAT(NOMBRE_PROFE, CONCAT(' ',CONCAT(AP_PATER_PROFE,CONCAT(' ',AP_MATER_PROFE)))) AS PROFESOR, GRADO, NOM_GRUPO, AVG(CALIFICACION) AS PROMEDIO FROM INS_ALUMNO_GRUPO INNER JOIN GRUPO ON INS_ALUMNO_GRUPO.ID_GRUPO = GRUPO.ID_GRUPO INNER JOIN PROFESOR ON GRUPO.ID_PROFESOR = PROFESOR.ID_PROFESOR INNER JOIN CALIFICACION ON INS_ALUMNO_GRUPO.ID_INS_ALUMNO_GRUPO = CALIFICACION.ID_INS_ALUMNO_GRUPO WHERE  GRADO =".$i." AND CICLO_ESCOLAR = ".$cicloEscolar." GROUP BY NOMBRE_PROFE, AP_PATER_PROFE, AP_MATER_PROFE, GRADO, NOM_GRUPO ORDER BY PROMEDIO ASC FETCH NEXT 1 ROWS ONLY";
                                        $stid = oci_parse($conn, $kuerito);
                                        $r = oci_execute($stid);
                                        while( ($obj = oci_fetch_object($stid)) != false ){
                                            echo " <tr> ";
                                            echo "     <th>".$obj->GRADO."</th> ";  
                                            echo "     <th>".$obj->NOM_GRUPO."</th> ";
                                            echo "     <th>".$obj->PROMEDIO."</th> "; 
                                            echo "     <th>".$obj->PROFESOR."</th> ";
                                            echo " </tr> ";
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
