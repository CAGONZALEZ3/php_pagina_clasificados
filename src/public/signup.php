<h2>Registro de Usuario</h2>

<?php
// Mensajes de error o éxito
if (isset($_GET['error'])) {
    echo "<p style='color: red;'>Error: " . htmlspecialchars($_GET['error']) . "</p>";
}
if (isset($_GET['success'])) {
    echo "<p style='color: green;'>Success: " . htmlspecialchars($_GET['success']) . "</p>";
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sing Up</title>
  <link rel="stylesheet" href="../public/css/site.css">
</head>

<?php include_once "../views/header.php"; ?>
<body>
<div class="search-box">
<h2>Sing Up</h2>
<form action="../php/controllers/auth.php" method="POST">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="confirm_password">Confirmar Contraseña:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>

    <a href ="../public/index.php" ><input type="submit" value="Registrarse"></a>
</form>
</body>