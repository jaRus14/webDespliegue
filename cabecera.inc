<html>

<head>
    <title>Mi web de despliegue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="cssComentarios.css">
<style>
#redes {
  display:flex;
  justify-content:center;
}

</style>
</head>
<body>

<div class="container">

    <!--Cabecera-->
    <div class="jumbotron jumbotron-fluid" style="background-color:#001a14;color:white;">
        <div class="container">
            <h1 class="display-4">Mi página de Despliegue</h1>
            <p class="lead">Esto es un trabajo de Clase de Despliegue de App Web</p>
        </div>
    </div>

   <!--Barra de navegacion-->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand btn btn-dark" href="index.php" style="color:white">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto  mt-2">
      <li class="nav-item">
        <a class="nav-link" href="javascript.php">Javascript</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="php.php">PHP</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>