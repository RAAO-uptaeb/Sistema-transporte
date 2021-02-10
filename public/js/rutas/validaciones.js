
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
    let nombre_ruta = d.querySelector('#nombre_ruta') //input de nombre
    let direccion_ruta = d.querySelector('#direccion_ruta') //input de apellido
    let hora_salida = d.querySelector('#hora_salida')
    let unidad = d.querySelector('#unidad_encargada')
   

    let submit = d.querySelector('#submit') //input de submit
 if (estaVacio(nombre_ruta,direccion_ruta)){
      alert('Todos los campos son obligatorios')
      return false
    }
    else if (estaVacio(nombre_ruta)){
      alert('El campo nombre debe estar lleno')
      return false
    }
    else if (estaVacio(direccion_ruta)){
      alert('El campo direccion debe estar lleno')
      return false
    }
    else if (!coincideExpresionRegular(nombre_ruta) ) {
      alert('El nombre solo acepta letras mayusculas y minusculas')
      return false
    } 
    else if(nombre_ruta.length<100 ){
      alert("El nombre es demasiado largo")
      return false
    }
      else if (!coincideExpresionRegular(direccion_ruta) ) {
      alert('El apellido solo acepta letras mayusculas y minusculas')
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
