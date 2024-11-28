<?php   
include '../views/header.php';
require_once __DIR__ . '../../php/controllers/anuncio.php';

$allAnuncios = allAnunciosByUsrId();
?>
    <?php
        if ($allAnuncios) {
            // Mostrar los anuncios como tarjetas
            echo '<div class="product-grid">';
            foreach ($allAnuncios as $anuncio) {
                // Mostrar cada anuncio en una tarjeta
                echo '<div class="product-card">';
                echo '<img src="' . $anuncio['ads_image_url'] . '" alt="' . $anuncio['ads_title'] . '">';
                echo '<h3>' . $anuncio['ads_title'] . '</h3>';
                echo '<p class="price">$' . number_format($anuncio['ads_price'], 2) . '</p>';
                echo '<p class="description">' . $anuncio['ads_description'] . '</p>';
                echo '<a href="editar_anuncio.php?id=' . $anuncio['ads_id']. '"> <button class="edit-button">Editar</button>'.'</a>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<p>No has publicado anuncios.</p>';
        }
    ?>
    <!-- Repeat .product-card for more items -->
</div>
<?php include '../views/footer.php'; ?> 
<?php include '../views/popup_ver_mas.php'; ?>

<script src="../public/JS/popup_ver_mas.js"></script>