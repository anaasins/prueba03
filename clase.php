<?php
/**
 * Clase recuento mujeres y hombres del gimnasio. Ana Asins
 */
class Gimnasio
{
  //creacion de dos arrays privados para ir almacenando.
  private $hombres=[];
  private $mujeres=[];

  //funciones publicas para almacenar nuevos datos en hombres y mujeres.
  public function nuevoHombre($hombre){
    if ($hombre>0) {
      $this->hombres[]=$hombre;
    }
  }

  public function nuevaMujer($mujer){
    if ($mujer>0) {
      $this->mujeres[]=$mujer;
    }
  }

  //metodos publicos para calcular la media de mujeres y de hombres.
  public function mediaHombres(){
    $mediaHombres=round(array_sum($this->hombres)/count($this->hombres));
    echo "La media semanal de hombres es: " .$mediaHombres ."<br>";
  }

  public function mediaMujeres(){
    $mediaMujeres=round(array_sum($this->mujeres)/count($this->mujeres));
    echo "La media semanal de mujeres es: " .$mediaMujeres ."<br>";
  }

}
 ?>
