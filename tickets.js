
function mostrarDatos() {

    let entradas = document.getElementById("cantidadEntradas").value 

    let precioEntrada = 200


    // ESTUDIANTE
    let descuentoEstudiante = precioEntrada*0.2

    let pagoEstudiante = descuentoEstudiante*entradas

    //TRAINEE
    let descuentoTrainee = precioEntrada*0.5

    let pagoTrainee = descuentoTrainee*entradas

    //JUNIOR
    let descuentoJunior = precioEntrada*0.85

    let pagoJunior = descuentoJunior*entradas

    //CATEGORIA
    let categoria = document.getElementById("categorias").value

    if(categoria== "estudiante"){

        document.getElementById("textoCambiar").textContent = "Total a pagar: $" + pagoEstudiante

    } else if (categoria=="trainee"){

        document.getElementById("textoCambiar").textContent = "Total a pagar: $" + pagoTrainee

    } else if(categoria=="junior"){

        document.getElementById("textoCambiar").textContent = "Total a pagar: $" + pagoJunior

    } else{

        document.getElementById("textoCambiar").textContent = "Ingrese su categoria para continuar"

    }

}


function borar(){

    // RESET DATOS

    document.getElementById("nombre").value = ""
    document.getElementById("apellido").value = "" 
    document.getElementById("email").value = ""





    document.getElementById("textoCambiar").textContent = "Total a pagar: $"

    document.getElementById("categorias").value = "seleccion-categoria"

    document.getElementById("cantidadEntradas").value = "Cantidad"


}