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
    <title>Registrate</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="..\css\login.css">
    <link rel="icon" type="image.png" href="../img/logo.png">

  </head>
  <body>
	<div class="container">
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
	<div class="container-formulario-login">
      <h2>Resetea tu Contraseña</h2>
    <form action="signup.php" method="POST">
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="password" name="password" placeholder="Contraseña" required="">
				<input type="password" name="confirm_password" placeholder="Confirma tu Contraseña" required="">
				<div class="send-button">
					<input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>
					<input type="submit" name="resetSubmit" value="Resetea Contraseña">
				</div>
			</form>
		</div>
	</div>
</body>
</html>