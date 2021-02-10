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
    let descripcion = d.querySelector('#descripcion') //input de nombre
    let costo = d.querySelector('#costo') //input de apellido
    let select = d.querySelector('#select')
   
   

    let submit = d.querySelector('#submit') //input de submit
 if (estaVacio(descripcion, costo)){
      alert('Todos los campos son obligatorios')
      return false
    }
    else if (estaVacio(descripcion)){
      alert('El descripcion  debe estar lleno')
      return false
    }
    else if (estaVacio(costo)){
      alert('El campo costo debe estar lleno')
      return false
    }
    else if (!coincideExpresionRegular(costo) ) {
      alert('El nombre solo acepta letras numeros')
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
