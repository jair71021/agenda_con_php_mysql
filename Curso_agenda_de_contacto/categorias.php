<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/jpg" href="public/img/foto.jpg">
  <title>Categorias contactos</title>
  <?php require_once "dependencias.php"; ?>
</head>
<body>
  <div class="container">
		<?php require_once "menu.php"; ?>
      <div class="jumbotron">
        <h1 class="display-4">Categorias</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
          <span class="fas fa-book"></span> Agregar categoria</button>
        <hr class="my-4">
        <div id="cargaTablaCategorias"></div>
      </div>
      <?php 
        require_once "vistas/categorias/modal_agregar.php";
        require_once "vistas/categorias/modal_actualizar.php";  
      ?>
	</div>

	<script src="public/js/categorias.js"></script>
</body>
</html>