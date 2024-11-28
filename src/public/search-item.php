<?php
include '../views/header.php';
require_once __DIR__ . '../../php/controllers/anuncio.php';

// Obtener el ID de la categoría desde la URL
$categoryId = isset($_GET['category']) ? intval($_GET['category']) : null;
$item = isset($_GET['item']) ? $_GET['item'] : null;


if ($categoryId && $item) {
    $allAnuncios = allAnunciosByCategory_Like($categoryId, $item);
} elseif ($categoryId) {
    $allAnuncios = allAnunciosByCategory($categoryId);
} elseif ($item) {
    $allAnuncios = allAnunciosByCategory_Like(null, $item);
} 
else {
    $allAnuncios = allAnuncios();
}
?>

<?php include '../views/search.php'; ?>

<div class="product-grid">
    <?php if ($allAnuncios): ?>
        <?php foreach ($allAnuncios as $anuncio): ?>
            <?php
                // Valores predeterminados para evitar errores
                $imageUrl = isset($anuncio['ads_image_url']) ? htmlspecialchars($anuncio['ads_image_url']) : 'default-image.jpg';
                $title = isset($anuncio['ads_title']) ? htmlspecialchars($anuncio['ads_title']) : 'Sin título';
                $name = isset($anuncio['name']) ? htmlspecialchars($anuncio['name']) : 'Vendedor desconocido';
                $price = isset($anuncio['ads_price']) ? number_format($anuncio['ads_price'], 2) : '0.00';
                $description = isset($anuncio['ads_description']) ? htmlspecialchars($anuncio['ads_description']) : 'Sin descripción';
            ?>
            <div class="product-card">
                <img src="<?= $imageUrl ?>" alt="<?= $title ?>">
                <h3>Vendedor: <?= $name ?> - <?= $title ?></h3>
                <p class="price">$<?= $price ?></p>
                <p class="description"><?= $description ?></p>
                <button id="btn_ver_mas" class="btn_ver_mas" data-title="<?= $title ?>" data-name="<?= $name ?>" data-price="<?= $price ?>" data-description="<?= $description ?>" data-image="<?= $imageUrl ?>" >Ver más</button>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No se encontraron anuncios.</p>
    <?php endif; ?>
</div>

<?php include '../views/footer.php'; ?>
<?php include '../views/popup_ver_mas.php'; ?>

<script src="../public/JS/popup_ver_mas.js"></script>
<script src="../public/JS/search-box.js"></script>
