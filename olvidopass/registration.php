<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="..\css\login.css">
    <link rel="icon" type="image.png" href="../img/logo.png">

  </head>
  <body>
	<div class="container">
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">

<form action="userAccount.php" method="post">

<div class="container-formulario-login">
      <h2>Registrate</h2>
    <form action="signup.php" method="POST">
    <span>Si tenes una cuenta -><a href="..\olvidopass\index.php">inicia sesion</a></span>
	
<div class="form-group">
  <label for="username">Nombre de usuario:</label>
  <input name="first_name" type="text" placeholder="Ingresa tu nombre" required>
</div>

<div class="form-group">
  <label for="email">Correo Electrónico:</label>
  <input name="email" type="text" placeholder="Ingresa tu usuario" required>
</div>

<div class="form-group">
  <label for="Contraseña">Contraseña:</label>
  <input name="password" type="password" placeholder="ingresa tu contraseña" required>
</div>

<div class="form-group">
  <label for="Confirmar contraseña">Confirmar contraseña:</label>
  <input name="confirm_password" type="password" placeholder="re-ingresa tu contraseña" required>
</div>

<div class="send-button">
	<input type="submit" name="signupSubmit" value="Crear Cuenta">
</div>

</form>
</div>
</div>

</body>
</html>