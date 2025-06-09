<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $img = $_FILES['imagen']['name'];
  move_uploaded_file($_FILES['imagen']['tmp_name'],"uploads/$img");
  $data = [
    'titulo'=>$_POST['titulo'],
    'descripcion'=>$_POST['descripcion'],
    'url_github'=>$_POST['url_github'],
    'url_produccion'=>$_POST['url_produccion'],
    'imagen'=>$img
  ];
  $ch=curl_init('/api/proyectos.php');
  curl_setopt_array($ch,[
    CURLOPT_CUSTOMREQUEST=>'POST',
    CURLOPT_HTTPHEADER=>['Content-Type: application/json'],
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_POSTFIELDS=>json_encode($data)
  ]);
  curl_exec($ch); curl_close($ch);
  header("Location: index.php"); exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<head>…</head>
<body>
  <h2>Agregar Proyecto</h2>
  <form method="post" enctype="multipart/form-data">
    <input name="titulo" required>
    <textarea name="descripcion" maxlength="200" required></textarea>
    <input type="url" name="url_github">
    <input type="url" name="url_produccion">
    <input type="file" name="imagen" required>
    <button>Guardar</button>
  </form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</body>
</html>