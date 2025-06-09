<?php
/*
include 'auth.php';
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $url_github = $_POST['url_github'];
  $url_produccion = $_POST['url_produccion'];

  $imagen = $_FILES['imagen']['name'];
  $tmp = $_FILES['imagen']['tmp_name'];
  move_uploaded_file($tmp, "uploads/$imagen");

  $sql = "INSERT INTO proyectos (titulo, descripcion, url_github, url_produccion, imagen) 
          VALUES ('$titulo', '$descripcion', '$url_github', '$url_produccion', '$imagen')";

  $conn->query($sql);
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Proyecto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style-custom.css">
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="card shadow-sm p-4">
    <h2 class="mb-4 text-success"><i class="fa fa-plus"></i> Agregar Proyecto</h2>

    <form method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
      </div>

      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" maxlength="200" rows="3" required></textarea>
        <div class="form-text">Máximo 200 caracteres.</div>
      </div>

      <div class="mb-3">
        <label for="url_github" class="form-label">URL GitHub</label>
        <input type="url" class="form-control" id="url_github" name="url_github">
      </div>

      <div class="mb-3">
        <label for="url_produccion" class="form-label">URL Producción</label>
        <input type="url" class="form-control" id="url_produccion" name="url_produccion">
      </div>

      <div class="mb-4">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="imagen" name="imagen" required>
      </div>

      <div class="d-flex justify-content-between">
        <a href="index.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Cancelar</a>
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
      </div>
    </form>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>
*/