<?php
include 'model/conexion.php';
if (isset($_GET['categoria'])){
  $categoria = $_GET['categoria'];
  $sql = "SELECT * from vehiculo where categoria = :cat";
  $sentencia = $bd->prepare($sql);
  $sentencia->bindParam(':cat', $categoria, PDO::PARAM_INT);
} else{
  $sql = "SELECT * FROM vehiculo";
  $sentencia = $bd->prepare($sql);
}
$sentencia->execute();
$vehiculo = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" 
  integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

  <title>Tienda de Vehículos</title>
</head>

<body>
  <!-- inicio menú -->
  <?php include 'maqueta/menu.inc' ?>
  <!-- fin menú -->

  <!-- vehiculos -->
  <div class="container">
    <div class="row">

      <?php
      foreach ($vehiculo as $dato) {
      ?>
        <div class="col-md-4 text-center mt-4">
          <a href="detalle-vehiculo.php?codigo=<?php echo $dato->idvehiculo ?>">
            <img src="img/<?php echo $dato->foto ?>" class="img-fluid">
          </a>
          <h2> <?php echo $dato->marca.' '.$dato->modelo; ?> </h2>
    <p>Precio: S/.<?php echo $dato->precio; ?> </p>
          <a href="detalle-vehiculo.php?codigo=<?php echo $dato->idvehiculo ?>" class="btn btn-primary">Ver detalles</a>
        </div>
      <?php
      }
      ?>

    </div>
  </div>
  <!-- fin vehiculos -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  
</body>

</html>