
(( c, d, a )=>{

  d.addEventListener('DOMContentLoaded',()=>{

    submit.addEventListener('click', (e)=>{

      if (validacionEstaBien()) { //function principal de validacion
        c('validacion correcta!')
      }else{
        c('validacion incorrecta')
        e.preventDefault() //prevenir que se envie el formulario
      }
    })

  })

  const validacionEstaBien = ()=> {
    //tomar inputs y botones
    let nombre = d.querySelector('#nombre') //input de nombre
    let apellido = d.querySelector('#apellido') //input de apellido
    let cedula = d.querySelector('#cedula')
    let telefono = d.querySelector('#telefono')

   

    let submit = d.querySelector('#submit') //input de submit
 if (estaVacio(nombre,apellido,cedula,telefono)){
      alert('Todos los campos son obligatorios')
      return false
    }
    else if (estaVacio(nombre)){
      alert('El campo nombre debe estar lleno')
      return false
    }
    else if (estaVacio(apellido)){
      alert('El campo apellido debe estar lleno')
      return false
    }
    else if (estaVacio(cedula)){
      alert('Asegurese de ingresar el campo cedula')
      return false
    }
    else if (!coincideExpresionRegular(nombre) ) {
      alert('El nombre solo acepta letras mayusculas y minusculas')
      return false
    } 
     else if (!coincideExpresionRegular(cedula) ) {
      alert('EL formato de la cedula no es valido')
      return false
    } 
    else if(nombre.length<100 ){
      alert("El nombre es demasiado largo")
      return false
    }

   return true
  }

  const estaVacio = (...elementos) => {
    let validacion = false
    elementos.forEach(elemento => {
      let valor = elemento.value.trim()
      //en caso de que haya alguno vacio
      if (valor.length <= 3) {
        //si entra en la condicional es porque
        //hay uno vacio
        validacion = true 
        elemento.classList.add('alerta-input')
      } else {
        elemento.classList.remove('alerta-input')
      }
    })
    return validacion
  }

  const coincideExpresionRegular = (...elementos) => {
    let validacion = true
    elementos.forEach(elemento => {
      let patron = elemento.dataset.patron
      let valor = elemento.value.trim()

      if (!valor.match(patron)) {
        validacion = false
        elemento.classList.add('alerta-input')
        elemento.nextElementSibling.classList.remove('esconder')
      } else {
        elemento.classList.remove('alerta-input')
        elemento.nextElementSibling.classList.add('esconder')
      }
    })
    return validacion
  }

})(console.log, document, alert)
