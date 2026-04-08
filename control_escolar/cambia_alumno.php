<?php 
    include("header.php");  
    include("conex.php");

    $ID_ALUMNO = $_GET['id'];
    $kuerito = "Select * from alumno WHERE ID_ALUMNO = ".$ID_ALUMNO;
    if($conn){
        $r = mysqli_query($conn, $kuerito);
        if($r->num_rows > 0){
            while($obj = $r->fetch_assoc()){
        $idAlumno = $obj["id_alumno"];
        $numeroCuenta = $obj["numero_cuenta"];
        $nombreAlumno = $obj["nombre_alumno"];
        $appAlumno = $obj["ap_pater_alumno"];
        $apmAlumno = $obj["ap_mater_alumno"];
        $correoAlumno = $obj["correo_alumno"];
        $generoAlumno = $obj["genero_alumno"]; 
    }
}
    }
    if ($generoAlumno == 'F'){
        $hombre = '';
        $mujer = 'checked';
    }else if ($generoAlumno == 'M'){
        $hombre = 'checked';
        $mujer = '';
    }
    
?>

	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Modificación de Alumnos</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Modificación de Alumno</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaAltaAlumno" method="POST" action="actualiza_alumno.php" >
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="hidden" class="form-control" name="idAlumno" value="<?php echo $idAlumno; ?>">
                                        <input type="text" class="form-control" name="numeroCuenta" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required value="<?php echo $numeroCuenta; ?>">
                                        <label class="form-label">Número de Cuenta del Alumno:</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nombreAlumno" required value="<?php echo $nombreAlumno; ?>">
                                        <label class="form-label">Nombre del Alumno:</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="appAlumno" required value="<?php echo $appAlumno; ?>">
                                        <label class="form-label">Apellido Paterno del Alumno:</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="apmAlumno" required value="<?php echo $apmAlumno; ?>">
                                        <label class="form-label">Apellido Materno del Alumno:</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="correoAlumno" required value="<?php echo $correoAlumno; ?>">
                                        <label class="form-label">Correo Electrónico del Alumno:</label>
                                    </div>
                                </div>
			                    <br>
			                    <label>Género del Alumno:</label>
                                <div class="form-group form-float">
                                    <div class="col-md-6 col-sm-8 col-xs-8">   
                                    	<div class="col-md-6 col-sm-8 col-xs-8">
                                           <input type="radio" id="femenino" name="sexoAlumno" value="F" <?php echo $mujer; ?>>
                                            <label for="femenino"> Femenino</label>
                                       </div>
                                        <div class="col-md-6 col-sm-8 col-xs-8">
                                        	<input type="radio" id="masculino" name="sexoAlumno" value="M" <?php echo $hombre; ?>>
                                            <label for="masculino"> Masculino</label>
                                        </div>
                                    </div>
                                </div>

                                <br><br><hr>
                                <button class="btn btn-primary waves-effect" type="submit">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<?php
	include("footer.php");
?>