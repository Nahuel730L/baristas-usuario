<?php 

include("con_db.php");

if (isset($_POST['register'])) {
	    $Nombre = trim($_POST['Nombre']);
	    $Apellido = trim($_POST['Apellido']);
	    $Telefono = trim($_POST['Telefono']);
	    $Email = trim($_POST['Email']);
	    $Comentario = trim($_POST['Comentario']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO contacto(Nombre, Apellido, Telefono, Email, Comentario, fecha_reg) VALUES ('$Nombre','$Apellido','$Telefono','$Email','$Comentario','$fechareg')";

	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }


?>