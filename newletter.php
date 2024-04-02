<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Usuario - Cafetería</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" type="image.jpg" href="./img/logo.png" />
  
</head>
<body class="cuerpo-usuario">
    <!-- Agrega el logo aquí -->

    <form method="post" class ="formulario">
      <h1 class="logo-usuario">
        <b>Registro de Usuario</b></h1>
      <div class="form-group">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <input type="submit" name="register"></input>
    </form>


        <?php 
        include("registrar.php");
        ?>

</body>
</html>
