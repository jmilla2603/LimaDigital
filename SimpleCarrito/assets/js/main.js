$(document).ready(function () {
  const cargarCarrito = function () {
    const contenido = $("#card_content");

    $.ajax({
      url: "controllers/carritoController.php",
      type: "GET",
    })
      .done(function (res) {
        console.log(res);
      })
      .fail(function (jsXHR, textStatus, errorThrown) {
        if (jsXHR === 0) {
        }
      });
  };
  cargarCarrito();
});
