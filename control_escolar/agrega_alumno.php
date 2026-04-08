<?php 
    include("header.php");  
?>

	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Registro de Alumnos</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Registro de Alumno</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaAltaAlumno" method="POST" action="guarda_alumno.php" >
                                <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="numeroCuenta" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
			                            <label class="form-label">Número de Cuenta del Alumno:</label>
			                        </div>
			                    </div>
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="nombreAlumno" required>
			                            <label class="form-label">Nombre del Alumno:</label>
			                        </div>
			                    </div>
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="appAlumno" required>
			                            <label class="form-label">Apellido Paterno del Alumno:</label>
			                        </div>
			                    </div>
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="apmAlumno" required>
			                            <label class="form-label">Apellido Materno del Alumno:</label>
			                        </div>
			                    </div>
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="correoAlumno" required>
			                            <label class="form-label">Correo Electrónico del Alumno:</label>
			                        </div>
			                    </div>
			                    <br>
			                    <label>Género del Alumno:</label>
                                <div class="form-group form-float">
                                    <div class="col-md-6 col-sm-8 col-xs-8">   
                                    	<div class="col-md-6 col-sm-8 col-xs-8">
                                           <input type="radio" id="femenino" name="sexoAlumno" value="F">
                                            <label for="femenino"> Femenino</label>
                                       </div>
                                        <div class="col-md-6 col-sm-8 col-xs-8">
                                        	<input type="radio" id="masculino" name="sexoAlumno" value="M">
                                            <label for="masculino"> Masculino</label>
                                        </div>
                                    </div>
                                </div>

                                <br><br><hr>
                                <button class="btn btn-primary waves-effect" type="submit">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<?php
	include("footer.php");
?>