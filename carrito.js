// Esperar a que el DOM esté cargado
document.addEventListener("DOMContentLoaded", function() {
    // Obtener todos los botones "Agregar al carrito"
    var addToCartButtons = document.getElementsByClassName("add-to-cart");
    
    // Agregar un evento de clic a cada botón
    Array.from(addToCartButtons).forEach(function(button) {
      button.addEventListener("click", function() {
        // Obtener el ID del producto del atributo data-id
        var productId = this.getAttribute("data-id");
        
        // Enviar una solicitud AJAX al servidor para agregar el producto al carrito
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "agregar_al_carrito.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // La solicitud se completó correctamente
            alert("Producto agregado al carrito");
          }
        };
        xhr.send("producto_id=" + productId);
      });
    });
  });