<?php 
    include("header.php");  
    $ID = $_GET['id'];
    include("conex.php");
    $kuerito = "SELECT * FROM GRUPO INNER JOIN PROFESOR ON GRUPO.ID_PROFESOR = PROFESOR.ID_PROFESOR INNER JOIN MATERIA ON GRUPO.ID_MATERIA = MATERIA.ID_MATERIA WHERE ID_GRUPO =".$ID;
    if($conn){
        $r = mysqli_query($conn, $kuerito);
        if($r->num_rows > 0){
            while($obj = $r->fetch_assoc()){
        $nombreProfesor = $obj["nombre_profe"] ." ". $obj["ap_pater_profe"] ." ". $obj["ap_mater_profe"];
        $nombreMateria = $obj["nombre_mat"];
        switch ($obj["ciclo_escolar"]) {
            case '2020':
                $ciclo = "2020 - 2021";
                break;
            case '2021':
                $ciclo = "2021 - 2022";
                break;
            case '2022':
                $ciclo = "2022 - 2023";
                break;
            default:
                $ciclo = "";
                break;
        }                                        
        $grado = $obj["grado"];
        $grupo = $obj["nom_grupo"];
    }
}
    }
?>

	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Consulta de Grupos</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Consulta de Grupo</h2>
                        </div>
                        <div class="body">
                                <div class="form-group form-float">
                                    <div class="form-line">

                                        <input type="text" class="form-control" name="nombreProfesor" value="<?php echo $nombreProfesor; ?>" disabled>
                                        <label class="form-label">Nombre del Profesor:</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">

                                        <input type="text" class="form-control" name="nombreMateria" value="<?php echo $nombreMateria; ?>" disabled>
                                        <label class="form-label">Nombre de ka materia:</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">

                                        <input type="text" class="form-control" name="ciclo" value="<?php echo $ciclo; ?>" disabled>
                                        <label class="form-label">ciclo escolar:</label>
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
                                

                                <br><br><hr>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<?php
	include("footer.php");
?>