<?php require_once '../php/init.php';
  include '../views/header.php';
?>

<div class="search-box">
    <input type="search" id="search-input" placeholder="¿Qué buscas?"/>
    <a id="search-link" href="search-item.php">
        <button class="btn_buscar" type="button">Buscar</button>
    </a>
</div>

<?php
if (isset($_GET['error'])) {
    echo "<p style='color: red;'>Error: " . htmlspecialchars($_GET['error']) . "</p>";
}
if (isset($_GET['success'])) {
    echo "<p style='color: green;'>Success: " . htmlspecialchars($_GET['success']) . "</p>";
}
?>

<script type="module">
    // Obtener referencias a los elementos
    const searchInput = document.getElementById('search-input');
    const searchLink = document.getElementById('search-link');

    // Actualizar el enlace cuando se hace clic en el botón
    searchLink.addEventListener('click', (event) => {
        const searchTerm = searchInput.value.trim(); // Obtener el valor del input
        if (searchTerm) {
            searchLink.href = `search-item.php?item=${encodeURIComponent(searchTerm)}`; // Añadir el parámetro al link
        } else {
            event.preventDefault(); // Evitar que se envíe si no hay búsqueda
            alert('Por favor, ingrese un término de búsqueda.');
        }
    });
</script>

<?php include '../views/footer.php'; ?>
