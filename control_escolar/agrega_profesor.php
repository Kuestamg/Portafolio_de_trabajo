<?php 
    include("header.php");  
?>

	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Registro de Profesores</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Registro de Profesor</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaAltaProfesor" method="POST" action="guarda_profesor.php" >
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="nombreProfesor" required>
			                            <label class="form-label">Nombre del Profesor:</label>
			                        </div>
			                    </div>
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="appProfesor" required>
			                            <label class="form-label">Apellido Paterno del Profesor:</label>
			                        </div>
			                    </div>
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="apmProfesor" required>
			                            <label class="form-label">Apellido Materno del Profesor:</label>
			                        </div>
			                    </div>
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="correoProfesor" required>
			                            <label class="form-label">Correo Electrónico del Profesor:</label>
			                        </div>
			                    </div>
                                <hr>
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