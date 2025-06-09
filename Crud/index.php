<?php
$json = @file_get_contents('http://localhost/Portafolio_CRUD/api/proyectos.php');
$proyectos = json_decode($json, true);
// Asegura que $proyectos siempre sea un array
if (!is_array($proyectos)) {
    $proyectos = [];
}
?>
<!DOCTYPE html>
<html lang="es">
 <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<head>…</head>
<body>
  <h2>Proyectos</h2>
  <a href="add.php">+ Agregar</a>
  <?php foreach ($proyectos as $p): ?>
    <div>
      <h3><?=htmlspecialchars($p['titulo'])?></h3>
      <p><?=htmlspecialchars($p['descripcion'])?></p>
      <img src="uploads/<?=htmlspecialchars($p['imagen'])?>" width="150">
      <p>
        <a href="<?=htmlspecialchars($p['url_github'])?>" target="_blank">GitHub</a>
        <a href="<?=htmlspecialchars($p['url_produccion'])?>" target="_blank">En producción</a>
      </p>
      <a href="edit.php?id=<?=$p['id']?>>Editar</a>
      <a href="delete.php?id=<?=$p['id']?>" onclick="return confirm('¿Seguro?')">Eliminar</a>
    </div><hr>
  <?php endforeach; ?>
</body>
</body>
</html>