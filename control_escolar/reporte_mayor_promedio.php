<?php 
    include("header.php");  
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Reporte alumnos con mejor promedio por grupos</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Digite el Ciclo Escolar a mostrar:</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaBuqueda" method="POST" action="rpt_mayor_promedio.php" >
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