<?php 
    include("header.php");  
    $ID = $_GET['id'];

    include("conex.php");
    $kuerito = "Select * from INS_ALUMNO_GRUPO INNER JOIN GRUPO ON INS_ALUMNO_GRUPO.ID_GRUPO= GRUPO.ID_GRUPO INNER JOIN MATERIA ON GRUPO.ID_MATERIA = MATERIA.ID_MATERIA INNER JOIN PROFESOR ON GRUPO.ID_PROFESOR = PROFESOR.ID_PROFESOR INNER JOIN ALUMNO ON INS_ALUMNO_GRUPO.ID_ALUMNO = ALUMNO.ID_ALUMNO ";
    if($conn){
        $r = mysqli_query($conn, $kuerito);
        if($r->num_rows > 0){
            while($obj = $r->fetch_assoc()){
        $profesor = $obj["nombre_profe"] ." ". $obj["ap_pater_profe"] ." ". $obj["ap_mater_profe"];
        $materia = $obj["nombre_mat"];
        $alumno = $obj["nombre_alumno"] ." ". $obj["ap_pater_alumno"] ." ". $obj["ap_mater_alumno"];
        $grado = $obj["grado"] ."°";
        $grupo = $obj["nom_grupo"];
    }
}
    }
?>

	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Consulta Alumno a Grupo</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Consulta Alumno a Grupo</h2>
                        </div>
                        <div class="body">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="profesor" value="<?php echo $profesor; ?>" disabled>
                                        <label class="form-label">Profesor:</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="materia" value="<?php echo $materia; ?>" disabled>
                                        <label class="form-label">Materia:</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alumno" value="<?php echo $alumno; ?>" disabled>
                                        <label class="form-label">Alumno:</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="grado" value="<?php echo $grado; ?>" disabled>
                                        <label class="form-label">Grado:</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="grupo" value="<?php echo $grupo; ?>" disabled>
                                        <label class="form-label">Grupo:</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        
                                    </div>
                                </div>

                                <br><br><hr>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<?php
	include("footer.php");
?>