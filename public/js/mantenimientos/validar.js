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
    let rif = d.querySelector('#costo') //input de nombre
    
    let submit = d.querySelector('#submit') //input de submit
 if (estaVacio(costo)){
      alert('Todos los campos son requeridos')
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
