document.addEventListener("DOMContentLoaded", () => {
    const toggleSearch = document.getElementById("toggle-search");
    const searchContainer = document.querySelector(".search-container");
  
    toggleSearch.addEventListener("click", () => {
      // Alterna la clase 'collapsed' en el contenedor de búsqueda
      searchContainer.classList.toggle("collapsed");
  
      // Cambia el texto del botón según el estado
      if (searchContainer.classList.contains("collapsed")) {
        toggleSearch.textContent = "Show Search";
      } else {
        toggleSearch.textContent = "Hide Search";
      }
    });
  });
  