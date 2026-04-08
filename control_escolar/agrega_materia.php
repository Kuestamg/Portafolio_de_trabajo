<?php 
    include("header.php");  
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Registro de Materias</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Registro de Materia</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaAltaMateria" method="POST" action="guarda_materia.php" >
			                    <div class="form-group form-float">
			                        <div class="form-line">
			                            <input type="text" class="form-control" name="nombreMateria" required>
			                            <label class="form-label">Nombre de la Materia:</label>
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