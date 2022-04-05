<?php
include 'model/conexion.php';
         ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

        <title>solicitudCode de informacion</title>
        
    </head>
    <body>
        <div class="container center-block">
            <div class="row justify-content-center">
                <!-- inicio menú -->
                <?php include 'maqueta/menu.inc' ?>

                <!-- fin menú -->

                <!-- formulario -->
                <div class="card m-5" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Solicitud de Informacion</h5>
                        <br>
                        <form method="post" action="solicitudCode.php">
                            <div class="form-group">
                            
                                <label for="Email">Email</label>
                                <input type="email" name="txtEmail" class="form-control" id="Email" placeholder="ejemplo@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="Nombre">Nombre</label>
                                <input type="text" name="txtNombre" class="form-control" id="Nombre" placeholder="Nombre y Apellido">
                            </div>
                            <div class="form-group">
                                <label for="Mensaje">Mensaje</label>
                                <textarea class="form-control" name="txaMensaje" id="Mensaje" rows="3"></textarea>
                            </div>
                            <input type =  'hidden' value ='<?php echo $_REQUEST ['codigo'];?>' name ="idvehiculo"/>
                            <button type="submit" class="btn btn-succes" name="BtnRegistrar" value="Registrar">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- formulario fin -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>


