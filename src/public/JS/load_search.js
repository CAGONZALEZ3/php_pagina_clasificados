document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search-bar'); // Obtener el input de búsqueda

    // Obtener las categorías desde el archivo PHP
    fetch('../../src/views/categorias.php')
        .then(response => response.json())
        .then(categorias => {
            const container = document.getElementById('categories-container');
            categorias.forEach(categoria => {
                const div = document.createElement('div');
                div.className = 'category';
                div.textContent = categoria.cat_name; // Nombre de la categoría
                div.dataset.id = categoria.cat_id;   // ID de la categoría

                // Evento clic para seleccionar una categoría
                div.addEventListener('click', () => {
                    const searchTerm = searchInput.value.trim(); // Obtener el valor de búsqueda
                    const categoryId = categoria.cat_id; // ID de la categoría seleccionada
                    
                    // Construir la URL con los parámetros category e item
                    let url = `../../src/public/search-item.php?category=${categoryId}`;
                    if (searchTerm) {
                        url += `&item=${encodeURIComponent(searchTerm)}`; // Añadir el parámetro item si hay búsqueda
                    }

                    // Redirigir a la nueva URL
                    window.location.href = url;
                });

                container.appendChild(div); // Agregar la categoría al contenedor
            });
        })
        .catch(error => console.error('Error cargando categorías:', error));

    // Event listener para el botón de búsqueda (si se quiere hacer búsqueda independiente)
    document.getElementById('search-button').addEventListener('click', () => {
        const searchTerm = searchInput.value.trim();
        if (searchTerm) {
            window.location.href = `../../src/public/search-item.php?item=${encodeURIComponent(searchTerm)}`;
        }
    });

    // Limpieza de la búsqueda
    document.getElementById('clear-button').addEventListener('click', () => {
        searchInput.value = ''; // Limpiar el campo de búsqueda
    });
});


document.getElementById("clear-button").addEventListener("click", () => {
    // Limpiar el campo de búsqueda
    const searchBar = document.getElementById("search-bar");
    searchBar.value = "";

    
});


