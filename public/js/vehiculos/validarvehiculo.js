
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
    let placa = d.querySelector('#placa') //input de nombre
    let modelo = d.querySelector('#modelo') //input de apellido
    let funcionamiento = d.querySelector('#funcionamiento')
   

    let submit = d.querySelector('#submit') //input de submit
 if (estaVacio(placa)){
      alert('El campo placa debe estar lleno')
      return false
    }else if (estaVacio(modelo)){
      alert('El campo modelo debe tener al menos 4 caracteres')
      return false
    }
    else if (estaVacio(funcionamiento)){
      alert('Asegurese de seleccionar si el vehiculo esta en funcionamiento, o no')
      return false
    }
    else if (!coincideExpresionRegular(placa) ) {
      alert('La placa no coincide con el tipo de dato esperado')
      return false
    } 
    else if (!coincideExpresionRegular(modelo) ) {
      alert('El modelo ingresado no coincide con el tipo de dato esperado')
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
