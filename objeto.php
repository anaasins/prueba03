<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Numero de hombres y mujeres semanales</title>
  </head>
  <body>
    <?php
      //incluimos la clase creada.
      include 'clase.php';
      //creamos un nuevo objeto.
      $gestor= new Gimnasio;
      //añadimos datos al array de hombres.
      $gestor->nuevoHombre($_POST["lunesh"]);
      $gestor->nuevoHombre($_POST["martesh"]);
      $gestor->nuevoHombre($_POST["miercolesh"]);
      $gestor->nuevoHombre($_POST["juevesh"]);
      $gestor->nuevoHombre($_POST["viernesh"]);
      $gestor->nuevoHombre($_POST["sabadoh"]);
      //añadimos datos al array de mujeres.
      $gestor->nuevaMujer($_POST["lunesm"]);
      $gestor->nuevaMujer($_POST["martesm"]);
      $gestor->nuevaMujer($_POST["miercolesm"]);
      $gestor->nuevaMujer($_POST["juevesm"]);
      $gestor->nuevaMujer($_POST["viernesm"]);
      $gestor->nuevaMujer($_POST["sabadom"]);

      //llamamos a las funciones de calculo de medias para que nos las saquen por pantalla.
      $gestor->mediaHombres();
      $gestor->mediaMujeres();
     ?>
  </body>
</html>
