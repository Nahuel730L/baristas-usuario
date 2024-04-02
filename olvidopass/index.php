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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a la app</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="..\css\estiloss.css">

    <link rel="icon" type="image/png" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        .espacio-vacio {
            height: 30vh; /* 30% de la altura de la ventana del navegador */
        }
    </style>
</head>

<body>

    <main>
        <div class="container">
            <?php if (!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])) { ?>
                <!-- Encabezado (Header) -->
                <header>
                    <div class="container">
                        <h1 class="logo"><a href=".\index.php">Baristas</a></h1>
                        <button class="menu-toggle" aria-expanded="false" aria-controls="menu">Menu</button>
                        <nav>
                            <ul id="menu" class="menu">
                                <li><a href="./index.php">Inicio</a></li>
                                <li><a href="#">Perfil</a></li>
                                <li><a href="./forgotPassword.php">Configuración</a></li>
                                <li><a href="./userAccount.php?logoutSubmit=1" class="logout">Cerrar Sesión</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>

                <!-- Contenido para el usuario -->
                <?php include 'user.php'; ?>
                <?php
                $user = new User();
                $conditions['where'] = array('id' => $sessData['userID']);
                $conditions['return_type'] = 'single';
                $userData = $user->getRows($conditions);
                ?>
                <h2>Bienvenid@ <?php echo $userData['first_name']; ?>!</h2>
                <div class="regisFrm">
                    <p><b>Nombre: </b><?php echo $userData['first_name']; ?></p>
                    <p><b>Correo: </b><?php echo $userData['email']; ?></p>
                </div>

                <!-- Espacio vacío para bajar al footer -->
                <div class="espacio-vacio"></div>

                <!-- Footer -->
                <footer>
                    <div class="container">
                        <p>© 2024 Todos los Derechos Reservados - Diseño y Desarrollo: <a href="https://instagram.com/nahuu_espinillo?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr" target="_blank">Nahuel Espinillo</a></p>
                        <img src="../img/payment.png" alt="Métodos de Pago">
                    </div>
                </footer>

            <?php } else { ?>
                <!-- Contenido para el inicio de sesión -->
                <?php echo !empty($statusMsg) ? '<p class="' . $statusMsgType . '">' . $statusMsg . '</p>' : ''; ?>
                <div class="container-formulario-login">
                    <h2>Inicia sesión</h2>
                    <form action="userAccount.php" method="POST">
                        <div class="form-group">
                            <label for="email">Correo Electrónico:</label>
                            <input name="email" type="text" placeholder="Ingresa tu usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="Contraseña">Contraseña:</label>
                            <input name="password" type="password" placeholder="Ingresa tu contraseña" required>
                        </div>
                        <div class="send-button">
                            <input type="submit" name="loginSubmit" value="Ingresar">
                        </div>
                    </form>
                    <p>¿No tienes cuenta aún? <a href="registration.php">Regístrate acá</a></p>
                    <a href="forgotPassword.php">¿Olvidaste tu Contraseña?</a>
                </div>
            <?php } ?>

        </div>
    </main>

    <script src="../js/script.js"></script>
</body>

</html>
