<?php

include 'auth.php';
include 'db.php';
$result = $conn->query("SELECT * FROM proyectos ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" href="../../assets/imgs/icon.png" />
  <title>Prueba 03</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="style-custom.css" />
</head>
<body class="bg-light">

<div class="container py-4">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <a href="add.php" class="btn btn-success"><i class="fa fa-plus"></i> Agregar Proyecto</a>
    <a href="logout.php" class="btn btn-outline-danger"><i class="fa fa-sign-out-alt"></i> Cerrar sesión</a>
  </div>

  <h2 class="mb-4 text-primary">Proyectos</h2>

  <?php while($row = $result->fetch_assoc()): ?>
    <div class="card mb-4 project-card">
      <div class="row g-0">
        <div class="col-md-3 d-flex align-items-center justify-content-center p-2">
          <img src="uploads/<?= $row['imagen'] ?>" class="img-fluid rounded project-image" alt="<?= $row['titulo'] ?>" />
        </div>
        <div class="col-md-9">
          <div class="card-body">
            <h4 class="card-title"><?= $row['titulo'] ?></h4>
            <p class="card-text"><?= $row['descripcion'] ?></p>
            <div class="d-flex flex-wrap gap-2">
              <a href="<?= $row['url_github'] ?>" class="btn btn-dark btn-sm" target="_blank">
                <i class="fab fa-github"></i> GitHub
              </a>
              <a href="<?= $row['url_produccion'] ?>" class="btn btn-primary btn-sm" target="_blank">
                <i class="fa fa-link"></i> Enlace
              </a>
              <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">
                <i class="fa fa-edit"></i> Editar
              </a>
              <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este proyecto?')">
                <i class="fa fa-trash"></i> Eliminar
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
