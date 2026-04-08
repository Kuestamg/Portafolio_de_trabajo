<?php 
    include("header.php");
    $cicloEscolar = $_POST['cicloEscolar'];
?>
    <section class="content">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            	<div class="header">
				    <h2>
				        Reporte alumnos con mejor promedio por grupos
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
                                    <th>Alumno</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Grado</th>
                                    <th>Grupo</th>
                                    <th>Promedio</th>
                                    <th>Alumno</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                 <?php 
                                    include("conex.php");
                                    for ($i=1; $i <= 6; $i++) {
                                        $kuerito = "SELECT CONCAT(NOMBRE_ALUMNO,CONCAT(' ',CONCAT(AP_PATER_ALUMNO,CONCAT(' ',AP_MATER_ALUMNO)))) AS ALUMNO, GRADO, NOM_GRUPO, AVG(CALIFICACION) AS PROMEDIO FROM INS_ALUMNO_GRUPO INNER JOIN GRUPO ON INS_ALUMNO_GRUPO.ID_GRUPO = GRUPO.ID_GRUPO INNER JOIN ALUMNO ON INS_ALUMNO_GRUPO.ID_ALUMNO = ALUMNO.ID_ALUMNO INNER JOIN CALIFICACION ON INS_ALUMNO_GRUPO.ID_INS_ALUMNO_GRUPO = CALIFICACION.ID_INS_ALUMNO_GRUPO WHERE GRADO = ".$i." AND NOM_GRUPO = 'A' AND CICLO_ESCOLAR = ".$cicloEscolar." GROUP BY NOMBRE_ALUMNO, AP_PATER_ALUMNO, AP_MATER_ALUMNO, GRADO, NOM_GRUPO ORDER BY PROMEDIO DESC  FETCH NEXT 3 ROWS ONLY";
                                        $stid = oci_parse($conn, $kuerito);
                                        $r = oci_execute($stid);
                                        while( ($obj = oci_fetch_object($stid)) != false ){
                                            echo " <tr> ";
                                            echo "     <th>".$obj->GRADO."</th> ";  
                                            echo "     <th>".$obj->NOM_GRUPO."</th> ";
                                            echo "     <th>".$obj->PROMEDIO."</th> "; 
                                            echo "     <th>".$obj->ALUMNO."</th> ";
                                            echo " </tr> ";
                                        }

                                        $kuerito = "SELECT CONCAT(NOMBRE_ALUMNO,CONCAT(' ',CONCAT(AP_PATER_ALUMNO,CONCAT(' ',AP_MATER_ALUMNO)))) AS ALUMNO, GRADO, NOM_GRUPO, AVG(CALIFICACION) AS PROMEDIO FROM INS_ALUMNO_GRUPO INNER JOIN GRUPO ON INS_ALUMNO_GRUPO.ID_GRUPO = GRUPO.ID_GRUPO INNER JOIN ALUMNO ON INS_ALUMNO_GRUPO.ID_ALUMNO = ALUMNO.ID_ALUMNO INNER JOIN CALIFICACION ON INS_ALUMNO_GRUPO.ID_INS_ALUMNO_GRUPO = CALIFICACION.ID_INS_ALUMNO_GRUPO WHERE GRADO = ".$i." AND NOM_GRUPO = 'B' AND CICLO_ESCOLAR = ".$cicloEscolar." GROUP BY NOMBRE_ALUMNO, AP_PATER_ALUMNO, AP_MATER_ALUMNO, GRADO, NOM_GRUPO ORDER BY PROMEDIO DESC  FETCH NEXT 3 ROWS ONLY";
                                        $stid = oci_parse($conn, $kuerito);
                                        $r = oci_execute($stid);
                                        while( ($obj = oci_fetch_object($stid)) != false ){
                                            echo " <tr> ";
                                            echo "     <th>".$obj->GRADO."</th> ";  
                                            echo "     <th>".$obj->NOM_GRUPO."</th> ";
                                            echo "     <th>".$obj->PROMEDIO."</th> "; 
                                            echo "     <th>".$obj->ALUMNO."</th> ";
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
