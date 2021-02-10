document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {

  var select = document.getElementById("select").selectedIndex;

  if(select == null || select == 0){
    alert("Debe seleccionar la unidad que maneja el chofer registrado");
    return false;
  }

}