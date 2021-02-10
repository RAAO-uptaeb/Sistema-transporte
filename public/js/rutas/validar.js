document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
    var nombreruta = document.getElementById('nombre_ruta').value;
     var direccion = document.getElementById('direccion_ruta').value;

  if(nombreruta.length==0|| direccion.length == 0 ){

    alert("Todos los campos son obligatorios");
    return false
  }

  else if(nombreruta.length == 0|| /^\s+$/.test(nombreruta)) {
    alert('Debes llenar el campo ruta');
    return false;
  }

 else if (direccion.length == 0 ) {
    alert('La direccion no puede estar vacia');
    return false;
  }else if (direccion.length < 6)
  {
    alert ('La direccion debe ser más larga');
    return false;
  }
  var select = document.getElementById("select").selectedIndex;
  if(select == null || select == 0){
    alert("Debe seleccionar la unidad encargada de esta ruta");
    return false;
  }
  return true
}