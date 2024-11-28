<?php
  session_start();

  // Verificar si el usuario está logueado
  if (isset($_SESSION['id'])) {
    $isLoggedIn = true;
    $userName = $_SESSION['nombre']; // Nombre del usuario
  } else {
    $isLoggedIn = false;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/site.css" />
    <title>Takeaway</title>
  </head>
<body>
        <?php include '../views/menu.php'; ?>
        <nav class="navbar flex-div">
          <div class="nav-left flex-div">
          <button id="toggleSidebar">Menú</button>
              <a href="index.php">
                  <img src="../public/image/logo.jpg" class="logo" alt="Logo"/>
              </a>
          </div>

          <div class="nav-right flex-div">
            <?php if ($isLoggedIn): ?>
              <!-- Mostrar elementos solo para usuarios logueados -->
                <img src="image/upload.png" class="upload-icon" id="upload-icon"/>
                  <span><?php echo htmlspecialchars($userName); ?></span>
                <img src="image/registerUser.png" class="user-iconss" id="user-iconss"/>
              <?php else: ?>
                 <!-- Mostrar el ícono o botón de inicio de sesión -->
                <img src="image/registerUser.png" class="user-icon" id="user-icon" alt="Login"/>
              <?php endif; ?>
          </div>
    </nav>
      <?php include '../views/popup_upload.php';?>
      <?php include '../views/popup_login.php';?>

      <script src="../public/JS/sidebar.js"></script>
