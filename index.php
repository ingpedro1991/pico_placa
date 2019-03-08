<!doctype html>
<html lang="en">
<head>
    <title>Sistema Pico y Placa</title>


    <meta charset="utf-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"><h1 align="center">Predictor Pico y Placa</h1> </div>
                <div class="card-body">
                    <form class="form-horizontal" id="formulario" method="POST" action="php/predecir.php">
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Numero de Placa</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="placa" id="placa" aria-describedby="placaayuda" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Numero de Placa" maxlength="7" minlength="7" required/>
                                <small id="placaayuda" class="form-text text-muted">Ingrese el Numero Completo de la Placa de Su Vehiculo Ej: XXXXXXX</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Indique Fecha</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" name="fecha" id="fecha" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Indique Hora</label>
                            <div class="col-sm-7">
                                <input type="time" class="form-control" name="hora" id="hora" required/>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" onclick="enviarFormulario();">Evaluar</button>
                            <button class="btn btn-secondary" onclick="limpiarFormulario()">Limpiar</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>

    function enviarFormulario(){ 
    document.formulario.submit() 
    }
    function limpiarFormulario() {
    document.getElementById("formulario").reset();
    }

    <?php  
    if ($_GET["msj"] != 0) {
    ?>
        $(document).ready(function(){
        $("#mensajes").modal("show");
        });

        <?php
    }
    ?>


</script>
<?php include('php/modal.php');?>

</body>
</html>