<?php 
    include("header.php");
    $cicloEscolar = $_POST['cicloEscolar'];
?>
    <section class="content">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            	<div class="header">
				    <h2>
				       Reporte Total de alumnos por género
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
                                    <th>Total mujeres</th>
                                    <th>Total hombres</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Grado</th>
                                    <th>Grupo</th>
                                    <th>Total mujeres</th>
                                    <th>Total hombres</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                 <?php 
                                    include("conex.php");
                                    $kuerito = "SELECT GRADO, NOM_GRUPO, SUM(CASE WHEN GENERO_ALUMNO = 'F' THEN 1 ELSE 0 END) AS F, SUM(CASE WHEN GENERO_ALUMNO = 'M' THEN 1 ELSE 0 END) AS M FROM INS_ALUMNO_GRUPO INNER JOIN GRUPO ON INS_ALUMNO_GRUPO.ID_GRUPO = GRUPO.ID_GRUPO INNER JOIN ALUMNO ON INS_ALUMNO_GRUPO.ID_ALUMNO = ALUMNO.ID_ALUMNO WHERE CICLO_ESCOLAR = ".$cicloEscolar." GROUP BY GRADO, NOM_GRUPO ORDER BY GRADO, NOM_GRUPO  ";
                                    $stid = oci_parse($conn, $kuerito);
                                    $r = oci_execute($stid);
                                    while( ($obj = oci_fetch_object($stid)) != false ){
                                        echo " <tr> ";
                                        echo "     <th>".$obj->GRADO." °</th> ";
                                        echo "     <th>".$obj->NOM_GRUPO."</th> ";  
                                        echo "     <th>".$obj->F." MUJERES</th> ";
                                        echo "     <th>".$obj->M." HOMBRES</th> "; 
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
