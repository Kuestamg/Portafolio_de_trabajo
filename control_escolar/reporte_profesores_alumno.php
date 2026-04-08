<?php 
    include("header.php");  
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>>Reporte profesores y alumnos</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Digite el Grado y Ciclo Escolar a mostrar:</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaBuqueda" method="POST" action="rpt_profesores_alumno.php" >                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                            <select class="form-control show-tick" name="grado" id="grado" required>
                                                <option value="">-- Selecciona un grado --</option>
                                                <option value="1">1°</option>
                                                <option value="2">2°</option>
                                                <option value="3">3°</option>
                                                <option value="4">4°</option>
                                                <option value="5">5°</option>
                                                <option value="6">6°</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                            <select class="form-control show-tick" name="grupo" id="grupo" required>
                                                <option value="">-- Selecciona un grupo --</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="cicloEscolar" required>
                                        <label class="form-label">Ciclo Escolar:</label>
                                    </div>
                                </div>
                              <hr>
                                <button class="btn btn-primary waves-effect" type="submit">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<?php
    include("footer.php");
?>