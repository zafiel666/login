<?php
              include './model/conexion.php';
              include './solicitud-infomacion.php';
              

                  $txtEmail = $_POST['txtEmail'];
                  $txtNombre = $_POST['txtNombre'];
                  $txaMensaje = $_POST['txaMensaje'];
                  $idvehiculo =$_POST['idvehiculo'];
              
              $insertar = "INSERT INTO informacion(nombre, email, mensaje, idvehiculo) VALUES ('$txtNombre','$txtEmail','$txaMensaje','$idvehiculo')";
              
              $resultado = mysqli_query($conexion, $insertar);
         
              mysqli_close($conexion);
          ?>
