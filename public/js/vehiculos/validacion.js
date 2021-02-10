document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
  var placa = document.getElementById('placa').value;
  if(placa.legth==0 && modelo.legth ==0 && select.legth== null){
    alert("Todos los campos son obligatorios");
    return false;
  }

 if(/^[A-Z]{3}[0-9]{3}$/.test(placa)) {
    alert('El campo placa debe cumplir con el formato solicitado');
    return false;
  }
 var modelo = document.getElementById('modelo').value;
  if (modelo.length == 0 ||/^[a-zA-Z]$/.test(modelo)) {
    alert('Complete el modelo de la unidad');
    return false;
  }else if (modelo.length < 3)
  {
    alert ('El campo modelo debe ser más largo');
    return false;
  }
}