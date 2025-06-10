<?php

include 'auth.php';
include 'db.php';

$id = $_GET['id'];
$proyecto = $conn->query("SELECT * FROM proyectos WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $url_github = $_POST['url_github'];
  $url_produccion = $_POST['url_produccion'];

  if ($_FILES['imagen']['name']) {
    $imagen = $_FILES['imagen']['name'];
    move_uploaded_file($_FILES['imagen']['tmp_name'], "uploads/$imagen");
    $img_sql = ", imagen='$imagen'";
  } else {
    $img_sql = "";
  }

  $sql = "UPDATE proyectos SET titulo='$titulo', descripcion='$descripcion', url_github='$url_github', url_produccion='$url_produccion' $img_sql WHERE id=$id";
  $conn->query($sql);
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Proyecto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style-custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="card shadow-sm p-4">
    <h2 class="mb-4 text-warning"><i class="fa fa-edit"></i> Editar Proyecto</h2>

    <form method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $proyecto['titulo'] ?>" required>
      </div>

      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" name="descripcion" id="descripcion" rows="4" required><?= $proyecto['descripcion'] ?></textarea>
      </div>

      <div class="mb-3">
        <label for="url_github" class="form-label">URL GitHub</label>
        <input type="url" class="form-control" name="url_github" id="url_github" value="<?= $proyecto['url_github'] ?>">
      </div>

      <div class="mb-3">
        <label for="url_produccion" class="form-label">URL Producción</label>
        <input type="url" class="form-control" name="url_produccion" id="url_produccion" value="<?= $proyecto['url_produccion'] ?>">
      </div>

      <div class="mb-3">
        <label class="form-label">Imagen actual</label><br>
        <img src="uploads/<?= $proyecto['imagen'] ?>" class="img-thumbnail mb-2" style="max-width: 200px;"><br>
        <label for="imagen" class="form-label">Cambiar imagen (opcional)</label>
        <input type="file" class="form-control" name="imagen" id="imagen">
      </div>

      <div class="d-flex justify-content-between">
        <a href="index.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Cancelar</a>
        <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i> Actualizar</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
