<?php
session_start();
$sessData = !empty($_SESSION['sessData']) ? $_SESSION['sessData'] : '';
if (!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])) {
    include './user.php';
    $user = new User();
    $conditions['where'] = array(
        'id' => $sessData['userID'],
    );
    $conditions['return_type'] = 'single';
    $userData = $user->getRows($conditions);
?>

    <div class="user-section">
        <h2>Bienvenid@ <?php echo $userData['first_name']; ?>!</h2>
        <a href="userAccount.php?logoutSubmit=1" class="logout">Cerrar Sesión</a>
        <div class="user-info">
            <p><b>Nombre: </b><?php echo $userData['first_name']; ?></p>
            <p><b>Correo: </b><?php echo $userData['email']; ?></p>
        </div>
    </div>

<?php } else { ?>

    <?php echo !empty($statusMsg) ? '<p class="' . $statusMsgType . '">' . $statusMsg . '</p>' : ''; ?>

<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a la app</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/estiloss.css">
    <link rel="icon" type="image/png" href="./img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header>
        <div class="container">
            <h1 class="logo"><a href=".\index.html">Baristas</a></h1>
            <button class="menu-toggle" aria-expanded="false" aria-controls="menu">Menu</button>
            <nav>
                <ul id="menu" class="menu">
                    <li><a href="./bienvenido.php">Inicio</a></li>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="./configuracion-de-clave.php">Configuración</a></li>
                    <li><a href="./logout.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <?php include 'login_form.php'; ?>
            <?php include 'user_section.php'; ?>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>© 2024 Todos los Derechos Reservados - Diseño y Desarrollo: <a href="https://instagram.com/nahuu_espinillo?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr" target="_blank">Nahuel Espinillo</a></p>
            <img src="./img/payment.png" alt="Métodos de Pago">
        </div>
    </footer>

    <script src="./js/script.js"></script>
</body>

</html>
