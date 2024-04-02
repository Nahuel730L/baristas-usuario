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
    <title>Reseteo de contraseña</title>
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
      			<h2>Ingresa tu e-mail para Resetear tu Contraseña</h2>
				  <div class="form-group">
  					<label for="username">correo:</label>
					  <input type="email" name="email" placeholder="xxxxx@xxxx.com" required="">
					</div>
				<div class="send-button">
					<input type="submit" name="forgotSubmit" value="Continuar">
				</div>
			</form>
		</div>
	</div>
</body>
</html>