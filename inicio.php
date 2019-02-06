<?php ob_start()?>


<h1>LENGUAJES DE PROGRAMACION</h1>
<p class="text-justify">Un lenguaje de programación es un lenguaje formal que especifica 
    una serie de instrucciones para que una computadora produzca diversas clases de datos.
     Los lenguajes de programación pueden usarse para crear programas que pongan en práctica 
     algoritmos específicos los cuales controlan el comportamiento físico y lógico de una computadora.

    Está formado por un conjunto de símbolos y reglas sintácticas y semánticas que definen su 
    estructura y el significado de sus elementos y expresiones. Al proceso por el cual se escribe, 
    se prueba, se depura, se compila (de ser necesario) y se mantiene el código fuente de un programa 
    informático se le llama programación.

    También la palabra programación se define como el proceso de creación de un programa de 
    computadora, mediante la aplicación de procedimientos lógicos, a través de los siguientes pasos:

    El desarrollo lógico del programa para resolver un problema en particular.
    Escritura de la lógica del programa empleando un lenguaje de programación específico 
    (codificación del programa).
    Ensamblaje o compilación del programa hasta convertirlo en lenguaje de máquina.
    Prueba y depuración del programa.
    Desarrollo de la documentación.</p>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators"  style="width=200px;">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/lenguajes.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/javasc.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/phppp.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>


<?php $contenido = ob_get_clean()?>
<?php include 'layout.php' ?>
