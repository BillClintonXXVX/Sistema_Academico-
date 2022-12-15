<?php
include "include/header.php";

?>

<?php
$id_estudiante = $_GET['id'];
$busc_estudiante = buscarEstudianteById($conexion, $id_estudiante);
$res_b_estudiante = mysqli_fetch_array($busc_estudiante);

?>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>EDITAR PRESENTE PERIODO ACADEMICO</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="OperacionActualizar/ActualizarPresentePeriodoAcad.php">
                        <input type="hidden" name="id" value="<?php echo $id_estudiante;?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Id:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="dni" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['dni']; ?>">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="PresentePeriodoAcad.php"><button class="btn btn-primary" type="button">Cancelar</button></a>
                          
						            
                          <button type="submit" class="btn btn-success">Actualizar Datos</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include "include/footer.php";

?>