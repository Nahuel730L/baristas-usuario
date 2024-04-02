
<?php 
include("con_db.php");

if (isset($_POST['register'])) {
        $Nombre = trim($_POST['Nombre']);
        $Apellido = trim($_POST['Apellido']);
        $Telefono = trim($_POST['Telefono']);
        $Edad = trim($_POST['Edad']);
        $DNI = trim($_POST['DNI']);
        $Domicilio = trim($_POST['Domicilio']);
        $Localidad = trim($_POST['Localidad']);
        $Pais = trim($_POST['Pais']);
        $email = trim($_POST['email']);
        $fechareg = date("d/m/y");

        $consulta = "INSERT INTO postulaciones (Nombre, Apellido, Telefono, Edad, DNI, Domicilio, Localidad, Pais, email, fecha_reg) VALUES ('$Nombre','$Apellido','$Telefono','$Edad','$DNI','$Domicilio','$Localidad','$Pais', '$email','$fechareg')";
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



