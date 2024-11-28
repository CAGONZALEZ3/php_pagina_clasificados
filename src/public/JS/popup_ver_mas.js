document.addEventListener("DOMContentLoaded", () => {
    const popup = document.getElementById("popup_ver_mas");
    const popupClose = document.getElementById("popup-close");
    const popupTitle = document.getElementById("popup-title");
    const popupName = document.getElementById("popup-name");
    const popupPrice = document.getElementById("popup-price");
    const popupDescription = document.getElementById("popup-description");
    const popupImage = document.getElementById("popup-image");

    // Asegúrate de que el popup esté oculto al cargar la página
    popup.style.display = "none";

    // Seleccionar todos los botones con la clase .btn_ver_mas
    const buttons = document.querySelectorAll(".btn_ver_mas");

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            // Obtener datos del botón
            const title = button.getAttribute("data-title");
            const name = button.getAttribute("data-name");
            const price = button.getAttribute("data-price");
            const description = button.getAttribute("data-description");
            const image = button.getAttribute("data-image");

            // Actualizar contenido del popup
            popupTitle.textContent = title || "Sin título";
            popupName.textContent = `Vendedor: ${name || "Desconocido"}`;
            popupPrice.textContent = `Precio: $${price || "0.00"}`;
            popupDescription.textContent = description || "Sin descripción";
            popupImage.src = image || "default-image.jpg";

            // Mostrar el popup
            popup.style.display = "flex";
        });
    });

    // Cerrar popup al hacer clic en el botón de cerrar
    popupClose.addEventListener("click", () => {
        popup.style.display = "none";
    });

    // Cerrar popup al hacer clic fuera del contenido
    popup.addEventListener("click", (e) => {
        if (e.target === popup) {
            popup.style.display = "none";
        }
    });
});
